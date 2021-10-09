<?php

namespace Hyperf\Seata\Rm;


use Hyperf\Contract\ConfigInterface;
use Hyperf\Seata\Common\Constants;
use Hyperf\Seata\Core\Model\ResourceManager;
use Hyperf\Seata\Core\Protocol\RegisterRMRequest;
use Hyperf\Seata\Core\Rpc\Swoole\RmRpcClient;

class RMClient
{

    /**
     * @var \Hyperf\Seata\Core\Rpc\Swoole\RmRpcClient
     */
    protected $rmRpcClient;

    /**
     * @var \Hyperf\Contract\ConfigInterface
     */
    protected $config;

    public function __construct(ResourceManager $resourceManager, RmRpcClient $rmRpcClient, ConfigInterface $config)
    {
        $this->rmRpcClient = $rmRpcClient;
        $this->rmRpcClient->setResourceManager($resourceManager);
        $this->config = $config;
    }

    public function init(string $applicationId, string $transactionServiceGroup): void {
        $this->rmRpcClient->setApplicationId($applicationId);
        $this->rmRpcClient->setTransactionServiceGroup($transactionServiceGroup);
//        $this->rmRpcClient->setTransactionMessageHandler(DefaultRMHandler::get());
        $this->rmRpcClient->init();
    }

}