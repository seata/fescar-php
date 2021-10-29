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

use Hyperf\Contract\StdoutLoggerInterface;
use Hyperf\Seata\Common\PositiveCounter;
use Hyperf\Seata\Core\Protocol\AbstractMessage;
use Hyperf\Seata\Core\Protocol\AbstractResultMessage;
use Hyperf\Seata\Core\Protocol\HeartbeatMessage;
use Hyperf\Seata\Core\Protocol\MergeMessage;
use Hyperf\Seata\Core\Protocol\MessageFuture;
use Hyperf\Seata\Core\Protocol\MessageType;
use Hyperf\Seata\Core\Protocol\ProtocolConstants;
use Hyperf\Seata\Core\Protocol\RpcMessage;
use Hyperf\Seata\Core\Rpc\Hook\RpcHookInterface;
use Hyperf\Seata\Core\Rpc\Runtime\ProcessorManager;
use Hyperf\Seata\Core\Rpc\Runtime\SocketChannelInterface;
use Hyperf\Seata\Core\Rpc\Runtime\SocketManager;
use Hyperf\Seata\Core\Rpc\Runtime\V1\ProtocolV1Decoder;
use Hyperf\Seata\Core\Rpc\Runtime\V1\ProtocolV1Encoder;
use Hyperf\Seata\Exception\SeataException;
use Hyperf\Utils\ApplicationContext;

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
    protected $futures = [];


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

    protected SocketManager $socketManager;

    protected ProcessorManager $processorManager;

    /**
     * @param \Psr\Log\LoggerInterface $logger
     */
    public function __construct()
    {
        $container = ApplicationContext::getContainer();
        $this->logger = $container->get(StdoutLoggerInterface::class);
        $this->protocolEncoder = $container->get(ProtocolV1Encoder::class);
        $this->protocolDecoder = $container->get(ProtocolV1Decoder::class);
        $this->socketManager = $container->get(SocketManager::class);
        $this->processorManager = $container->get(ProcessorManager::class);
    }

    public function init()
    {
        // TODO 增加定时器清理超时的 features
    }

    public function sendAsyncRequest(
        SocketChannelInterface $socketChannel,
        AbstractMessage $message,
        int $timeout = 100,
        bool $withResponse = false
    ) {
        $messageType = $message instanceof HeartbeatMessage ? ProtocolConstants::MSGTYPE_HEARTBEAT_REQUEST : ProtocolConstants::MSGTYPE_RESQUEST_ONEWAY;
        $rpcMessage = $this->buildRequestMessage($message, $messageType);

        if ($rpcMessage->getBody() instanceof MergeMessage) {
            $this->mergeMsgMap[$rpcMessage->getId()] = $rpcMessage->getBody();
        }

        if ($withResponse) {
            $response =  $socketChannel->sendSyncWithResponse($rpcMessage, $timeout);
            $this->processorManager->runProcessor($socketChannel, $response);
            return $response;
        }
        return $socketChannel->sendSyncWithoutResponse($rpcMessage, $timeout);
    }

    public function getFutures(): array
    {
        return $this->futures;
    }

    public function setFutures(array $futures): void
    {
        $this->futures = $futures;
    }

    /**
     * rpc sync request
     * Obtain the return result through MessageFuture blocking.
     *
     * @param channel       netty channel
     * @param rpcMessage    rpc message
     * @param timeoutMillis rpc communication timeout
     * @throws TimeoutException
     * @return response message
     */
    protected function sendSync(Address $address, RpcMessage $rpcMessage, int $timeoutMillis)
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
        $this->futures[$rpcMessage->getId()] = $messageFuture;

        // $this->doBeforeRpcHooks((string)$channel, $rpcMessage);

        $result = $this->socketManager->acquireChannel($address)->sendSyncWithResponse($rpcMessage, $timeoutMillis);

        //$data = $this->protocolEncoder->encode($rpcMessage);
        //
        ///** @var \Swoole\Coroutine\Socket $socket */
        //$socket = $this->clientConnectionManager->acquireConnection($channel)->getConnection();
        //$result = $socket->sendAll($data, $timeoutMillis);

        $messageFuture->get($timeoutMillis);

        // $this->doAfterRpcHooks((string) $channel, $rpcMessage, $result);
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
        SocketChannelInterface $socketChannel,
        AbstractMessage $message,
        int $timeout
    ) {
        if ($timeout <= 0) {
            throw new SeataException('timeout should more than 0ms');
        }
        return $this->sendAsyncRequest($socketChannel, $message, $timeout, true);
    }

    protected function sendAsyncRequestWithoutResponse(SocketChannelInterface $socketChannel, AbstractMessage $message): int|AbstractResultMessage
    {
        return $this->sendAsyncRequest($socketChannel, $message, 0, false);
    }

    protected function buildRequestMessage(AbstractMessage $message, int $messageType): RpcMessage
    {
        $rpcMessage = new RpcMessage();
        $rpcMessage->setId($this->getNextMessageId());
        $rpcMessage->setMessageType($messageType);
        $rpcMessage->setCodec(ProtocolConstants::CONFIGURED_CODEC);
        $rpcMessage->setCompressor(ProtocolConstants::CONFIGURED_COMPRESSOR);
        $rpcMessage->setBody($message);
        return $rpcMessage;
    }

    protected function getNextMessageId()
    {
        return PositiveCounter::incrementAndGet();
    }
}
