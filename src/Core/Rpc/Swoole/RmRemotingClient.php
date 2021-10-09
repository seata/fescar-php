<?php

namespace Hyperf\Seata\Core\Rpc\Swoole;


use Hyperf\Seata\Common\Constants;
use Hyperf\Seata\Core\Model\ResourceManager;
use Hyperf\Seata\Core\Protocol\MessageType;
use Hyperf\Seata\Core\Protocol\RegisterRMRequest;
use Hyperf\Seata\Core\Rpc\Processor\Client\ClientHeartbeatProcessor;
use Hyperf\Seata\Core\Rpc\Processor\Client\ClientOnResponseProcessor;
use Hyperf\Seata\Core\Rpc\Processor\Client\RmBranchCommitProcessor;
use Hyperf\Seata\Core\Rpc\Processor\Client\RmBranchRollbackProcessor;
use Hyperf\Seata\Core\Rpc\Processor\Client\RmUndoLogProcessor;
use Hyperf\Seata\Core\Rpc\TransactionMessageHandler;
use Hyperf\Seata\Core\Rpc\TransactionRole;
use Hyperf\Utils\ApplicationContext;

class RmRemotingClient extends AbstractRemotingClient
{

    protected ResourceManager $resourceManager;
    protected string $customerKeys = '';
    protected bool $initialized = false;
    protected const KEEP_ALIVE_TIME = PHP_INT_MAX;
    protected const MAX_QUEUE_SIZE = 20000;
    protected string $applicationId = '';
    protected string $transactionServiceGroup = '';

    protected SwooleClientPoolManager $clientConnectionManager;

    public function __construct($transactionRole = TransactionRole::RMROLE)
    {
        parent::__construct($transactionRole);
        $this->clientConnectionManager = ApplicationContext::getContainer()->get(SwooleClientConnectionManager::class);
    }

    public function init()
    {
        parent::init();

        // $this->registerService();
        $this->initRegisterProcessor();
    }

    /**
     * @return \Hyperf\Seata\Core\Protocol\Transaction\GlobalBeginResponse|\Hyperf\Seata\Core\Rpc\the
     */
    public function registerService()
    {
        $request = new RegisterRMRequest($this->applicationId, $this->transactionServiceGroup);
        $request->setResourceIds($this->getMergedResourceKeys());
        return $this->sendMsgWithResponse($request);
    }

    public function registerResource(string $resourceGroupId, string $resourceId): void
    {
        if ($this->transactionServiceGroup !== '') {
            if ($this->clientConnectionManager->reconnect($this->transactionServiceGroup)) {
            }
        }
    }

    public function initRegisterProcessor()
    {
        // 1.registry rm client handle branch commit processor
        $rmBranchCommitProcessor = new RmBranchCommitProcessor($this->getTransactionMessageHandler(), $this);
        parent::registerProcessor(MessageType::TYPE_BRANCH_COMMIT, $rmBranchCommitProcessor);
        // 2.registry rm client handle branch commit processor
        $rmBranchRollbackProcessor = new RmBranchRollbackProcessor($this->getTransactionMessageHandler(), $this);
        parent::registerProcessor(MessageType::TYPE_BRANCH_ROLLBACK, $rmBranchRollbackProcessor);
        // 3.registry rm handler undo log processor
        $rmUndoLogProcessor = new RmUndoLogProcessor($this->getTransactionMessageHandler());
        parent::registerProcessor(MessageType::TYPE_RM_DELETE_UNDOLOG, $rmUndoLogProcessor);
        // 4.registry TC response processor
        $onResponseProcessor = new ClientOnResponseProcessor($this->mergeMsgMap, $this->getFeatures(),$this->getTransactionMessageHandler());
        parent::registerProcessor(MessageType::TYPE_SEATA_MERGE_RESULT, $onResponseProcessor, null);
        parent::registerProcessor(MessageType::TYPE_BRANCH_REGISTER_RESULT, $onResponseProcessor, null);
        parent::registerProcessor(MessageType::TYPE_BRANCH_STATUS_REPORT_RESULT, $onResponseProcessor, null);
        parent::registerProcessor(MessageType::TYPE_GLOBAL_LOCK_QUERY_RESULT, $onResponseProcessor, null);
        parent::registerProcessor(MessageType::TYPE_REG_RM_RESULT, $onResponseProcessor, null);
        // 5.registry heartbeat message processor
        $clientHeartbeatProcessor = new ClientHeartbeatProcessor();
        parent::registerProcessor(MessageType::TYPE_HEARTBEAT_MSG, $clientHeartbeatProcessor, null);
    }

    public function getResourceManager(): ResourceManager
    {
        return $this->resourceManager;
    }

    public function getTransactionMessageHandler(): TransactionMessageHandler
    {
        return $this->transactionMessageHandler;
    }

    /**
     * @return $this
     */
    public function setResourceManager(ResourceManager $resourceManager)
    {
        $this->resourceManager = $resourceManager;
        return $this;
    }

    public function getCustomerKeys(): string
    {
        return $this->customerKeys;
    }

    /**
     * @return $this
     */
    public function setCustomerKeys(string $customerKeys)
    {
        $this->customerKeys = $customerKeys;
        return $this;
    }

    public function getApplicationId(): string
    {
        return $this->applicationId;
    }

    /**
     * @return $this
     */
    public function setApplicationId(string $applicationId)
    {
        $this->applicationId = $applicationId;
        return $this;
    }

    public function getTransactionServiceGroup(): string
    {
        return $this->transactionServiceGroup;
    }

    /**
     * @return $this
     */
    public function setTransactionServiceGroup(string $transactionServiceGroup)
    {
        $this->transactionServiceGroup = $transactionServiceGroup;
        return $this;
    }

    public function destroy(): void
    {

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
}