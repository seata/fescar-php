<?php

namespace Hyperf\Seata\Core\Rpc\Swoole;


use Exception;
use Hyperf\Contract\ConnectionInterface;
use Hyperf\Seata\Common\Constants;
use Hyperf\Seata\Core\Model\ResourceManagerInterface;
use Hyperf\Seata\Core\Protocol\AbstractMessage;
use Hyperf\Seata\Core\Protocol\MessageType;
use Hyperf\Seata\Core\Protocol\RegisterRMRequest;
use Hyperf\Seata\Core\Protocol\RpcMessage;
use Hyperf\Seata\Core\Protocol\Transaction\GlobalBeginResponse;
use Hyperf\Seata\Core\Rpc\channel;
use Hyperf\Seata\Core\Rpc\msg;
use Hyperf\Seata\Core\Rpc\Processor\Client\ClientHeartbeatProcessor;
use Hyperf\Seata\Core\Rpc\Processor\Client\ClientOnResponseProcessor;
use Hyperf\Seata\Core\Rpc\Processor\Client\RmBranchCommitProcessor;
use Hyperf\Seata\Core\Rpc\Processor\Client\RmBranchRollbackProcessor;
use Hyperf\Seata\Core\Rpc\Processor\Client\RmUndoLogProcessor;
use Hyperf\Seata\Core\Rpc\requestMessage;
use Hyperf\Seata\Core\Rpc\response;
use Hyperf\Seata\Core\Rpc\server;
use Hyperf\Seata\Core\Rpc\serverAddress;
use Hyperf\Seata\Core\Rpc\TimeoutException;
use Hyperf\Seata\Core\Rpc\TransactionMessageHandler;
use Hyperf\Seata\Core\Rpc\TransactionRole;
use Hyperf\Seata\Exception\TodoException;
use Hyperf\Utils\ApplicationContext;

class RmRemotingClient extends AbstractRemotingClient
{

    protected ResourceManagerInterface $resourceManager;
    protected string $customerKeys = '';
    protected bool $initialized = false;
    protected const KEEP_ALIVE_TIME = PHP_INT_MAX;
    protected const MAX_QUEUE_SIZE = 20000;
    protected string $applicationId = '';
    protected string $transactionServiceGroup = '';
    protected SwooleClientConnectionManager $clientConnectionManager;

    public function __construct($transactionRole = TransactionRole::RMROLE)
    {
        parent::__construct($transactionRole);
        $container = ApplicationContext::getContainer();
        $this->clientConnectionManager = $container->get(SwooleClientConnectionManager::class);
    }

    public function init()
    {

        $this->initRegisterProcessor();
        $this->initialized = true;
        parent::init();
        if ($this->resourceManager && ! empty($this->resourceManager->getManagedResources()) && $this->transactionServiceGroup) {
            $this->clientConnectionManager->reconnect($this->transactionServiceGroup);
        }
        $this->registerService();
    }

    public function registerService(): RpcMessage
    {
        $request = new RegisterRMRequest($this->applicationId, $this->transactionServiceGroup);
        $request->setResourceIds($this->getMergedResourceKeys());
        return $this->sendMsgWithResponse($request);
    }

    public function registerResource(string $resourceGroupId, string $resourceId): void
    {
        if ($this->transactionServiceGroup !== '') {
            $this->clientConnectionManager->reconnect($this->transactionServiceGroup);
        }
    }

    public function initRegisterProcessor()
    {
        // 1.registry rm client handle branch commit processor
        $rmBranchCommitProcessor = new RmBranchCommitProcessor($this->getTransactionMessageHandler(), $this);
        $this->registerProcessor(MessageType::TYPE_BRANCH_COMMIT, $rmBranchCommitProcessor);
        // 2.registry rm client handle branch commit processor
        $rmBranchRollbackProcessor = new RmBranchRollbackProcessor($this->getTransactionMessageHandler(), $this);
        $this->registerProcessor(MessageType::TYPE_BRANCH_ROLLBACK, $rmBranchRollbackProcessor);
        // 3.registry rm handler undo log processor
        $rmUndoLogProcessor = new RmUndoLogProcessor($this->getTransactionMessageHandler());
        $this->registerProcessor(MessageType::TYPE_RM_DELETE_UNDOLOG, $rmUndoLogProcessor);
        // 4.registry TC response processor
        $onResponseProcessor = new ClientOnResponseProcessor($this->mergeMsgMap, $this->getFeatures(), $this->getTransactionMessageHandler());
        $this->registerProcessor(MessageType::TYPE_SEATA_MERGE_RESULT, $onResponseProcessor, null);
        $this->registerProcessor(MessageType::TYPE_BRANCH_REGISTER_RESULT, $onResponseProcessor, null);
        $this->registerProcessor(MessageType::TYPE_BRANCH_STATUS_REPORT_RESULT, $onResponseProcessor, null);
        $this->registerProcessor(MessageType::TYPE_GLOBAL_LOCK_QUERY_RESULT, $onResponseProcessor, null);
        $this->registerProcessor(MessageType::TYPE_REG_RM_RESULT, $onResponseProcessor, null);
        // 5.registry heartbeat message processor
        $clientHeartbeatProcessor = new ClientHeartbeatProcessor();
        $this->registerProcessor(MessageType::TYPE_HEARTBEAT_MSG, $clientHeartbeatProcessor, null);
    }

    public function getResourceManager(): ResourceManagerInterface
    {
        return $this->resourceManager;
    }

    public function getTransactionMessageHandler(): TransactionMessageHandler
    {
        return $this->transactionMessageHandler;
    }

    public function setResourceManager(ResourceManagerInterface $resourceManager): static
    {
        $this->resourceManager = $resourceManager;
        return $this;
    }

    public function getCustomerKeys(): string
    {
        return $this->customerKeys;
    }

    public function setCustomerKeys(string $customerKeys): static
    {
        $this->customerKeys = $customerKeys;
        return $this;
    }

    public function getApplicationId(): string
    {
        return $this->applicationId;
    }

    public function setApplicationId(string $applicationId): static
    {
        $this->applicationId = $applicationId;
        return $this;
    }

    public function getTransactionServiceGroup(): string
    {
        return $this->transactionServiceGroup;
    }

    public function setTransactionServiceGroup(string $transactionServiceGroup): static
    {
        $this->transactionServiceGroup = $transactionServiceGroup;
        return $this;
    }

    public function destroy(): void
    {
        throw new TodoException();
    }

    protected function getMergedResourceKeys(): string
    {
        $resourceIds = [];
        $managedResources = $this->getResourceManager()->getManagedResources();
        foreach ($managedResources as $resource) {
            $resourceIds[] = $resource->getResourceId();
        }
        return implode(Constants::DBKEYS_SPLIT_CHAR, $resourceIds);
    }

    public function sendSyncRequest(ConnectionInterface $connection, object $message): GlobalBeginResponse
    {
        return $this->sendMsgWithResponse($message);
    }

    public function sendAsyncResponse(string $serverAddress, RpcMessage $rpcMessage, object $message)
    {
        $this->sendMsgWithResponse($rpcMessage);
    }

    public function onRegisterMsgSuccess(
        string $serverAddress,
        $channel,
        object $response,
        AbstractMessage $requestMessage
    ) {
        throw new TodoException();
    }

    public function onRegisterMsgFail(
        string $serverAddress,
        $channel,
        object $response,
        AbstractMessage $requestMessage
    ) {
        throw new TodoException();
    }
}