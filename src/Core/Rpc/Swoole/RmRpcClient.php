<?php

namespace Hyperf\Seata\Core\Rpc\Swoole;


use Hyperf\Seata\Common\Constants;
use Hyperf\Seata\Core\Model\ResourceManager;
use Hyperf\Seata\Core\Protocol\AbstractMessage;
use Hyperf\Seata\Core\Protocol\RegisterRMRequest;
use Hyperf\Seata\Core\Rpc\TransactionRole;

class RmRpcClient extends AbstractRpcRemotingClient
{

    /**
     * @var \Hyperf\Seata\Core\Model\ResourceManager
     */
    protected $resourceManager;
    protected $customerKeys = '';
    protected const KEEP_ALIVE_TIME = PHP_INT_MAX;
    protected const MAX_QUEUE_SIZE = 20000;
    protected $applicationId = '';
    protected $transactionServiceGroup = '';

    protected $instances = [];

    public function __construct($transactionRole = TransactionRole::RMROLE)
    {
        parent::__construct($transactionRole);
    }

    public function init()
    {
        parent::init();

        $this->registerService();
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

    public function getResourceManager(): ResourceManager
    {
        return $this->resourceManager;
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