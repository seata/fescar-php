<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
namespace Hyperf\Seata\Core\Rpc;

use Hyperf\Contract\ConnectionInterface;
use Hyperf\Contract\StdoutLoggerInterface;
use Hyperf\Seata\Core\Protocol\AbstractMessage;
use Hyperf\Seata\Core\Protocol\Codec\ProtocolV1Decoder;
use Hyperf\Seata\Core\Protocol\Codec\ProtocolV1Encoder;
use Hyperf\Seata\Core\Protocol\ProtocolConstants;
use Hyperf\Seata\Core\Protocol\RpcMessage;
use Hyperf\Seata\Exception\SeataException;
use Hyperf\Utils\ApplicationContext;
use Hyperf\Seata\Utils\Buffer\ByteBuffer;

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
     * @param mixed $channel
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

    protected function getNextMessageId()
    {
        return 1;
        return random_int(1000, 9999);
    }

    /**
     * @param mixed $channel
     * @return false|int
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

        $data = $this->protocolEncoder->encode($rpcMessage);

        $result = $channel->sendAll($data, $timeout);
        if ($withResponse) {
            $this->protocolDecoder->decode(ByteBuffer::allocateSocket($channel));
        }
        return $result;
    }
}
