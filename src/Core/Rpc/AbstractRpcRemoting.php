<?php

namespace Hyperf\Seata\Core\Rpc;


use Hyperf\Contract\ConnectionInterface;
use Hyperf\Contract\StdoutLoggerInterface;
use Hyperf\Seata\Core\Protocol\AbstractMessage;
use Hyperf\Seata\Core\Protocol\AbstractResultMessage;
use Hyperf\Seata\Core\Protocol\MergeMessage;
use Hyperf\Seata\Core\Protocol\MessageFuture;
use Hyperf\Seata\Core\Protocol\ProtocolConstants;
use Hyperf\Seata\Core\Protocol\RpcMessage;
use Hyperf\Seata\Core\Rpc\Hook\RpcHookInterface;
use Hyperf\Seata\Core\Rpc\Processor\RemotingProcessorInterface;
use Hyperf\Seata\Core\Rpc\Swoole\SwooleClientConnectionManager;
use Hyperf\Seata\Core\Rpc\Swoole\V1\ProtocolV1Decoder;
use Hyperf\Seata\Core\Rpc\Swoole\V1\ProtocolV1Encoder;
use Hyperf\Seata\Exception\SeataException;
use Hyperf\Utils\ApplicationContext;
use Hyperf\Seata\Utils\Buffer\ByteBuffer;
use Hyperf\Utils\Buffer\SwooleSocketByteBuffer;

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
     * @var array ConcurrentHashMap<String serverAddress, BlockingQueue<RpcMessage>>
    */
    protected array $basketMap = [];

    /**
     * @var RpcHookInterface[]
     */
    protected array $rpcHooks = [];

    protected SwooleClientConnectionManager $clientConnectionManager;

    /**
     * @param \Psr\Log\LoggerInterface $logger
     */
    public function __construct()
    {
        $container = ApplicationContext::getContainer();
        $this->logger = $container->get(StdoutLoggerInterface::class);
        $this->protocolEncoder = $container->get(ProtocolV1Encoder::class);
        $this->protocolDecoder = $container->get(ProtocolV1Decoder::class);
        $this->clientConnectionManager = $container->get(SwooleClientConnectionManager::class);
    }

    public function init()
    {
        // TODO 增加定时器清理超时的 features
    }

    /**
     * rpc sync request
     * Obtain the return result through MessageFuture blocking.
     *
     * @param channel       netty channel
     * @param rpcMessage    rpc message
     * @param timeoutMillis rpc communication timeout
     * @return response message
     * @throws TimeoutException
     */
    protected function sendSync(Address $channel, RpcMessage $rpcMessage, int $timeoutMillis)
    {
        if ($timeoutMillis <= 0) {
            throw new SeataException('timeout should more than 0ms');
        }

        if (empty($channel)) {
            $this->logger->warning('sendSync nothing, caused by null channel.');
            return null;
        }

        $messageFuture = new MessageFuture();
        $messageFuture->setRequestMessage($rpcMessage);
        $messageFuture->setTimeout($timeoutMillis);
        $this->features[$rpcMessage->getId()] = $messageFuture;

        $this->doBeforeRpcHooks((string)$channel, $rpcMessage);

        $data = $this->protocolEncoder->encode($rpcMessage);

        /** @var \Swoole\Coroutine\Socket $socket */
        $socket = $this->clientConnectionManager->acquireConnection($channel)->getConnection();
        $result = $socket->sendAll($data, $timeoutMillis);

        $messageFuture->get($timeoutMillis);
        $this->doAfterRpcHooks((string) $channel, $rpcMessage, $result);
        return $result;
    }

    protected function doBeforeRpcHooks(string $remoteAddr, RpcMessage $request)
    {
        foreach ($this->rpcHooks as $hook) {
            $hook->doBeforeRequest($remoteAddr, $request);
        }
    }

    protected function doAfterRpcHooks(string $remoteAddr, RpcMessage $request, object $response)
    {
        foreach ($this->rpcHooks as $hook) {
            $hook->doAfterResponse($remoteAddr, $request, $response);
        }
    }

    /**
     * Send async request with response object.
     */
    protected function sendAsyncRequestWithResponse(
        ConnectionInterface $connection,
        AbstractMessage $message,
        int $timeout
    ) {
        if ($timeout <= 0) {
            throw new SeataException('timeout should more than 0ms');
        }
        return $this->sendAsyncRequest($connection, $message, $timeout, true);
    }

    protected function sendAsyncRequestWithoutResponse(ConnectionInterface $connection, AbstractMessage $message): int|AbstractResultMessage
    {
        return $this->sendAsyncRequest($connection, $message, 0, false);
    }

    public function sendAsyncRequest(
        ConnectionInterface $connection,
        AbstractMessage $message,
        int $timeout = 100,
        bool $withResponse = false
    ): int|RpcMessage {
        $rpcMessage = new RpcMessage();
        $rpcMessage->setId($this->getNextMessageId());
        $rpcMessage->setMessageType(ProtocolConstants::MSGTYPE_RESQUEST_ONEWAY);
        $rpcMessage->setCodec(ProtocolConstants::CONFIGURED_CODEC);
        $rpcMessage->setCompressor(ProtocolConstants::CONFIGURED_COMPRESSOR);
        $rpcMessage->setBody($message);

        if ($rpcMessage->getBody() instanceof MergeMessage) {
            $this->mergeMsgMap[$rpcMessage->getId()] = $rpcMessage->getBody();
        }

        $data = $this->protocolEncoder->encode($rpcMessage);

        /** @var \Swoole\Coroutine\Socket $socket */
        $socket = $connection->getConnection();
        $result = $socket->sendAll($data, $timeout);
        if ($withResponse) {
            return $this->protocolDecoder->decode(ByteBuffer::allocateSocket($socket));
        }
        return (int)$result;
    }

    protected function getNextMessageId()
    {
        return 1;
        return random_int(1000, 9999);
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
