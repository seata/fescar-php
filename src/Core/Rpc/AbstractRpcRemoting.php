<?php

namespace Hyperf\Seata\Core\Rpc;


use Hyperf\Contract\ConnectionInterface;
use Hyperf\Contract\StdoutLoggerInterface;
use Hyperf\Seata\Core\Protocol\AbstractMessage;
use Hyperf\Seata\Core\Protocol\Codec\Packer;
use Hyperf\Seata\Core\Rpc\Swoole\V1\ProtocolV1Decoder;
use Hyperf\Seata\Core\Rpc\Swoole\V1\ProtocolV1Encoder;
use Hyperf\Seata\Core\Protocol\MessageFuture;
use Hyperf\Seata\Core\Protocol\MergeMessage;
use Hyperf\Seata\Core\Protocol\MessageType;
use Hyperf\Seata\Core\Protocol\ProtocolConstants;
use Hyperf\Seata\Core\Protocol\RpcMessage;
use Hyperf\Seata\Core\Rpc\Processor\AbstractRemotingProcessor;
use Hyperf\Seata\Core\Rpc\Processor\RemotingProcessorInterface;
use Hyperf\Seata\Exception\SeataException;
use Hyperf\Utils\ApplicationContext;
use Hyperf\Utils\Buffer\ByteBuffer;
use Hyperf\Utils\Buffer\SwooleSocketByteBuffer;
use Swoole\Coroutine\Socket;

abstract class AbstractRpcRemoting implements Disposable
{

    /**
     * @var \Psr\Log\LoggerInterface
     */
    protected $logger;

    /**
     * The Is sending.
     * @var bool
     */
    protected $isSending = false;

    /**
     * @var ProtocolV1Encoder
     */
    protected $protocolEncoder;

    /**
     * @var ProtocolV1Decoder
     */
    protected $protocolDecoder;

    /**
     * @var array ConcurrentHashMap<Integer, MessageFuture>
     */
    protected $features = [];

    /**
     * @var array <MessageType, RemotingProcessor>
     */
    protected $processorTable = [];

    /**
     * @var array Map<Integer, MergeMessage>
     */
    protected $mergeMsgMap = [];

    /**
     * @param \Psr\Log\LoggerInterface $logger
     */
    public function __construct()
    {
        $container = ApplicationContext::getContainer();
        $this->logger = $container->get(StdoutLoggerInterface::class);
        $this->protocolEncoder = $container->get(ProtocolV1Encoder::class);
        $this->protocolDecoder = $container->get(ProtocolV1Decoder::class);
    }

    /**
     * Send async request with response object.
     */
    protected function sendAsyncRequestWithResponse(
        $channel,
        AbstractMessage $message,
        int $timeout
    ) {
        if ($timeout <= 0) {
            throw new SeataException('timeout should more than 0ms');
        }
        return $this->sendAsyncRequest($channel, $message, $timeout, true);
    }

    /**
     * Send async request without response object.
     */
    protected function sendAsyncRequestWithoutResponse(ConnectionInterface $connection, AbstractMessage $message)
    {
        return $this->sendAsyncRequest($connection, $message, 0, false);
    }

    /**
     * @return int|false
     */
    private function sendAsyncRequest(
        $channel,
        AbstractMessage $message,
        int $timeout = 100,
        bool $withResponse = false
    ) {
        $rpcMessage = new RpcMessage();
        $rpcMessage->setId($this->getNextMessageId());
        $rpcMessage->setMessageType(ProtocolConstants::MSGTYPE_RESQUEST_ONEWAY);
        $rpcMessage->setCodec(ProtocolConstants::CONFIGURED_CODEC);
        $rpcMessage->setCompressor(ProtocolConstants::CONFIGURED_COMPRESSOR);
        $rpcMessage->setBody($message);

        if ($this->logger) {
            // $this->logger->debug(sprintf("offer message: %s", $rpcMessage->getBody()));
        }

        if ($rpcMessage->getBody() instanceof MergeMessage) {
            $this->mergeMsgMap[$rpcMessage->getId()] = $rpcMessage->getBody();
        }

        $data = $this->protocolEncoder->encode($rpcMessage);

        $result = $channel->sendAll($data, $timeout);
        if ($withResponse) {
            $this->protocolDecoder->decode(ByteBuffer::allocateSocket($channel));
        }
        return $result;
    }

    protected function getNextMessageId()
    {
        return 1;
        return random_int(1000, 9999);
    }

    protected function registerProcessor(int $messageType, RemotingProcessorInterface $processor)
    {
        $this->processorTable[$messageType] = $processor;
    }

    public function getFeatures(): array
    {
        return $this->features;
    }

    public function setFeatures(array $features): void
    {
        $this->features = $features;
    }


}
