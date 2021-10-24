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
namespace Hyperf\Seata\Core\Rpc\Swoole;

use Hyperf\Contract\ConnectionInterface;
use Hyperf\Seata\Core\Protocol\AbstractMessage;
use Hyperf\Seata\Core\Protocol\MessageType;
use Hyperf\Seata\Core\Protocol\RegisterTMRequest;
use Hyperf\Seata\Core\Protocol\RpcMessage;
use Hyperf\Seata\Core\Rpc\Address;
use Hyperf\Seata\Core\Rpc\channel;
use Hyperf\Seata\Core\Rpc\msg;
use Hyperf\Seata\Core\Rpc\Processor\Client\ClientHeartbeatProcessor;
use Hyperf\Seata\Core\Rpc\Processor\Client\ClientOnResponseProcessor;
use Hyperf\Seata\Core\Rpc\requestMessage;
use Hyperf\Seata\Core\Rpc\response;
use Hyperf\Seata\Core\Rpc\serverAddress;
use Hyperf\Seata\Core\Rpc\TransactionRole;

class TmClient extends AbstractRemotingClient
{
    protected const KEEP_ALIVE_TIME = PHP_INT_MAX;

    protected const MAX_QUEUE_SIZE = 20000;

    protected string $applicationId = '';

    protected string $transactionServiceGroup = '';

    protected string|null $accessKey = null;

    protected string|null $secretKey = null;

    protected bool $initialized = false;

    public function __construct($transactionRole = TransactionRole::TMROLE)
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
    }

    /**
     * @return \Hyperf\Seata\Core\Protocol\Transaction\GlobalBeginResponse
     */
    private function initRegisterProcessor()
    {
        // 1.registry TC response processor
        $onResponseProcessor = new ClientOnResponseProcessor($this->mergeMsgMap, $this->getFeatures(), $this->getTransactionMessageHandler());
        $this->registerProcessor(MessageType::TYPE_SEATA_MERGE_RESULT, $onResponseProcessor);
        $this->registerProcessor(MessageType::TYPE_GLOBAL_BEGIN_RESULT, $onResponseProcessor);
        $this->registerProcessor(MessageType::TYPE_GLOBAL_COMMIT_RESULT, $onResponseProcessor);
        $this->registerProcessor(MessageType::TYPE_GLOBAL_REPORT_RESULT, $onResponseProcessor);
        $this->registerProcessor(MessageType::TYPE_GLOBAL_ROLLBACK_RESULT, $onResponseProcessor);
        $this->registerProcessor(MessageType::TYPE_GLOBAL_STATUS_RESULT, $onResponseProcessor);
        $this->registerProcessor(MessageType::TYPE_REG_CLT_RESULT, $onResponseProcessor);
        // 2.registry heartbeat message processor
        $clientHeartbeatProcessor = new ClientHeartbeatProcessor();
        $this->registerProcessor(MessageType::TYPE_HEARTBEAT_MSG, $clientHeartbeatProcessor);

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

    /**
     * @param string $transactionServiceGroup
     */
    public function setTransactionServiceGroup(string $transactionServiceGroup): void
    {
        $this->transactionServiceGroup = $transactionServiceGroup;
    }

    protected function getTransactionServiceGroup(): string
    {
        return $this->transactionServiceGroup;
    }

    public function sendSyncRequest(ConnectionInterface $connection, object $message)
    {
        // TODO: Implement sendSyncRequest() method.
    }

    public function sendAsyncResponse(string $serverAddress, RpcMessage $rpcMessage, object $message)
    {
        // TODO: Implement sendAsyncResponse() method.
    }

    public function onRegisterMsgSuccess(string $serverAddress, Address $channel, object $response, AbstractMessage $requestMessage)
    {
        // TODO: Implement onRegisterMsgSuccess() method.
    }

    public function onRegisterMsgFail(string $serverAddress, Address $channel, object $response, AbstractMessage $requestMessage)
    {
        // TODO: Implement onRegisterMsgFail() method.
    }
}
