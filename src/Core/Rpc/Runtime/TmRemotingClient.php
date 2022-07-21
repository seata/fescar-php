<?php

declare(strict_types=1);
/**
 * Copyright 1999-2022 Seata.io Group.
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
namespace Hyperf\Seata\Core\Rpc\Runtime;

use Hyperf\Seata\Common\AddressTarget;
use Hyperf\Seata\Core\Protocol\AbstractMessage;
use Hyperf\Seata\Core\Protocol\HeartbeatMessage;
use Hyperf\Seata\Core\Protocol\MessageType;
use Hyperf\Seata\Core\Protocol\ProtocolConstants;
use Hyperf\Seata\Core\Protocol\RegisterTMRequest;
use Hyperf\Seata\Core\Rpc\Address;
use Hyperf\Seata\Core\Rpc\Processor\Client\ClientHeartbeatProcessor;
use Hyperf\Seata\Core\Rpc\Processor\Client\ClientOnResponseProcessor;
use Hyperf\Seata\Core\Rpc\response;
use Hyperf\Seata\Core\Rpc\TransactionRole;
use Hyperf\Utils\ApplicationContext;
use Hyperf\Utils\Coroutine;

class TmRemotingClient extends AbstractRemotingClient
{
    protected const KEEP_ALIVE_TIME = PHP_INT_MAX;

    protected const MAX_QUEUE_SIZE = 20000;

    protected string $applicationId = '';

    protected string $transactionServiceGroup = '';

    protected string|null $accessKey = null;

    protected string|null $secretKey = null;

    protected bool $initialized = false;

    public function __construct(int $transactionRole = TransactionRole::TMROLE)
    {
        parent::__construct($transactionRole);
    }

    public function destroy(): void
    {
        // TODO: Implement destroy() method.
    }

    public function init()
    {
        $this->initRegisterProcessor();

        if (! $this->initialized) {
            parent::init();
            $this->initialized = true;
        }
        $this->registerService();
        $this->createHeartbeatLoop();
    }

    public function getApplicationId(): string
    {
        return $this->applicationId;
    }

    public function setApplicationId(string $applicationId): void
    {
        $this->applicationId = $applicationId;
    }

    public function getAccessKey(): ?string
    {
        return $this->accessKey;
    }

    public function setAccessKey(?string $accessKey): void
    {
        $this->accessKey = $accessKey;
    }

    public function getSecretKey(): ?string
    {
        return $this->secretKey;
    }

    public function setSecretKey(?string $secretKey): void
    {
        $this->secretKey = $secretKey;
    }

    public function setTransactionServiceGroup(string $transactionServiceGroup): void
    {
        $this->transactionServiceGroup = $transactionServiceGroup;
    }

    public function sendSyncRequest(SocketChannelInterface $socketChannel, object $message)
    {
        // TODO: Implement sendSyncRequest() method.
    }

    public function onRegisterMsgSuccess(string $serverAddress, Address $channel, object $response, AbstractMessage $requestMessage)
    {
        // TODO: Implement onRegisterMsgSuccess() method.
    }

    public function onRegisterMsgFail(string $serverAddress, Address $channel, object $response, AbstractMessage $requestMessage)
    {
        // TODO: Implement onRegisterMsgFail() method.
    }

    protected function createHeartbeatLoop()
    {
        Coroutine::create(function () {
            while (true) {
                try {
                    $response = $this->sendMsgWithResponse(HeartbeatMessage::ping(), AddressTarget::TM);
                } catch (\InvalidArgumentException $exception) {
//                    var_dump($exception->getMessage());
                } catch (\Throwable $exception) {
//                    var_dump($exception->getMessage());
                }
                sleep(5);
            }
        });
    }

    protected function getTransactionServiceGroup(): string
    {
        return $this->transactionServiceGroup;
    }

    protected function acquireChannel(Address $address): SocketChannelInterface
    {
        return $this->socketManager->acquireChannel($address);
    }

    private function registerService()
    {
        $request = new RegisterTMRequest($this->applicationId, $this->transactionServiceGroup);
        return $this->sendMsgWithResponse($request, AddressTarget::TM);
    }

    /**
     * @return \Hyperf\Seata\Core\Protocol\Transaction\GlobalBeginResponse
     */
    private function initRegisterProcessor()
    {
        // 1.registry TC response processor
        $onResponseProcessor = new ClientOnResponseProcessor($this->getTransactionMessageHandler());
        $this->processorManager->registerProcessor(MessageType::TYPE_SEATA_MERGE_RESULT, $onResponseProcessor);
        $this->processorManager->registerProcessor(MessageType::TYPE_GLOBAL_BEGIN_RESULT, $onResponseProcessor);
        $this->processorManager->registerProcessor(MessageType::TYPE_GLOBAL_COMMIT_RESULT, $onResponseProcessor);
        $this->processorManager->registerProcessor(MessageType::TYPE_GLOBAL_REPORT_RESULT, $onResponseProcessor);
        $this->processorManager->registerProcessor(MessageType::TYPE_GLOBAL_ROLLBACK_RESULT, $onResponseProcessor);
        $this->processorManager->registerProcessor(MessageType::TYPE_GLOBAL_STATUS_RESULT, $onResponseProcessor);
        $this->processorManager->registerProcessor(MessageType::TYPE_REG_CLT_RESULT, $onResponseProcessor);
        $container = ApplicationContext::getContainer();
        // 2.registry heartbeat message processor
        $clientHeartbeatProcessor = $container->get(ClientHeartbeatProcessor::class);
        $this->processorManager->registerProcessor(ProtocolConstants::MSGTYPE_HEARTBEAT_RESPONSE, $clientHeartbeatProcessor);
    }
}
