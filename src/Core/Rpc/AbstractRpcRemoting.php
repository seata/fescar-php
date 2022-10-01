<?php

declare(strict_types=1);
/**
 * Copyright 2019-2022 Seata.io Group.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 */
namespace Hyperf\Seata\Core\Rpc;

use Hyperf\Seata\Common\PositiveCounter;
use Hyperf\Seata\Core\Protocol\AbstractMessage;
use Hyperf\Seata\Core\Protocol\AbstractResultMessage;
use Hyperf\Seata\Core\Protocol\HeartbeatMessage;
use Hyperf\Seata\Core\Protocol\MergeMessage;
use Hyperf\Seata\Core\Protocol\ProtocolConstants;
use Hyperf\Seata\Core\Protocol\RpcMessage;
use Hyperf\Seata\Core\Rpc\Hook\RpcHookInterface;
use Hyperf\Seata\Core\Rpc\Runtime\ProcessorManager;
use Hyperf\Seata\Core\Rpc\Runtime\SocketChannelInterface;
use Hyperf\Seata\Core\Rpc\Runtime\SocketManager;
use Hyperf\Seata\Core\Rpc\Runtime\V1\ProtocolV1Decoder;
use Hyperf\Seata\Core\Rpc\Runtime\V1\ProtocolV1Encoder;
use Hyperf\Seata\Exception\SeataException;
use Hyperf\Seata\Logger\LoggerFactory;
use Hyperf\Utils\ApplicationContext;
use Psr\Container\ContainerInterface;
use Psr\Log\LoggerInterface;

abstract class AbstractRpcRemoting implements Disposable
{
    /**
     * @var LoggerInterface
     */
    protected LoggerInterface $logger;

    /**
     * The Is sending.
     * @var bool
     */
    protected bool $isSending = false;

    /**
     * @var ProtocolV1Encoder
     */
    protected ProtocolV1Encoder $protocolEncoder;

    /**
     * @var ProtocolV1Decoder
     */
    protected ProtocolV1Decoder $protocolDecoder;

    /**
     * @var array ConcurrentHashMap<Integer, MessageFuture>
     */
    protected array $futures = [];

    /**
     * @var array Map<Integer, MergeMessage>
     */
    protected array $mergeMsgMap = [];

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

    protected ContainerInterface $container;

    public function __construct()
    {
        $this->container = ApplicationContext::getContainer();
        $this->logger = $this->container->get(LoggerFactory::class)->create(static::class);
        $this->protocolEncoder = $this->container->get(ProtocolV1Encoder::class);
        $this->protocolDecoder = $this->container->get(ProtocolV1Decoder::class);
        $this->socketManager = $this->container->get(SocketManager::class);
        $this->processorManager = $this->container->get(ProcessorManager::class);
    }

    public function init()
    {
        // TODO 增加定时器清理超时的 features
    }

    public function sendAsyncRequest(
        SocketChannelInterface $socketChannel,
        AbstractMessage $message,
        int $timeout = 1000,
        bool $withResponse = false
    ) {
        $messageType = $message instanceof HeartbeatMessage ? ProtocolConstants::MSGTYPE_HEARTBEAT_REQUEST : ProtocolConstants::MSGTYPE_RESQUEST_ONEWAY;
        $rpcMessage = $this->buildRequestMessage($message, $messageType);

        if ($rpcMessage->getBody() instanceof MergeMessage) {
            $this->mergeMsgMap[$rpcMessage->getId()] = $rpcMessage->getBody();
        }

        if ($withResponse) {
            return $socketChannel->sendSyncWithResponse($rpcMessage, $timeout);
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

        return $this->socketManager->acquireChannel($address)->sendSyncWithResponse($rpcMessage, $timeoutMillis);
    }

    protected function sendAsync(Address $address, RpcMessage $rpcMessage, int $timeoutMillis = 1000)
    {
        $channel = $this->socketManager->acquireChannel($address);
        $channel->sendSyncWithoutResponse($rpcMessage, $timeoutMillis);
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
    protected function sendAsyncRequestWithResponse(SocketChannelInterface $socketChannel, AbstractMessage $message, int $timeout)
    {
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

    protected function buildResponseMessage(RpcMessage $rpcMessage, object $message, int $messageType): RpcMessage
    {
        $rpcMsg = new RpcMessage();
        $rpcMsg->setMessageType($messageType);
        $rpcMsg->setCodec($rpcMessage->getCodec());
        $rpcMsg->setCompressor($rpcMessage->getCompressor());
        $rpcMsg->setBody($message);
        $rpcMsg->setId($rpcMessage->getId());
        return $rpcMsg;
    }

    protected function getNextMessageId(): int
    {
        return PositiveCounter::incrementAndGet();
    }
}
