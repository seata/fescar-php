<?php

namespace Hyperf\Seata\Rm;


use Hyperf\Contract\ConfigInterface;
use Hyperf\Seata\Core\Model\ResourceManagerInterface;
use Hyperf\Seata\Core\Rpc\Runtime\RmRemotingClient;

class RMClient
{

    protected RmRemotingClient $rmRpcClient;
    protected ConfigInterface $config;
    protected DefaultRMHandler $defaultRMHandler;
    protected ResourceManagerInterface $resourceManager;

    public function __construct(ResourceManagerInterface $resourceManager, RmRemotingClient $rmRpcClient, ConfigInterface $config, DefaultRMHandler $defaultRMHandler)
    {
        $this->rmRpcClient = $rmRpcClient;
        $this->config = $config;
        $this->defaultRMHandler = $defaultRMHandler;
        $this->resourceManager = $resourceManager;
    }

    public function init(string $applicationId, string $transactionServiceGroup): void {
        $this->rmRpcClient->setApplicationId($applicationId);
        $this->rmRpcClient->setTransactionServiceGroup($transactionServiceGroup);
        $this->rmRpcClient->setResourceManager($this->resourceManager);
        $this->rmRpcClient->setTransactionMessageHandler($this->defaultRMHandler);
        $this->rmRpcClient->init();
    }

}