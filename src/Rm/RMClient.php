<?php

namespace Hyperf\Seata\Rm;


use Hyperf\Contract\ConfigInterface;
use Hyperf\Seata\Common\Constants;
use Hyperf\Seata\Core\Model\ResourceManager;
use Hyperf\Seata\Core\Protocol\RegisterRMRequest;
use Hyperf\Seata\Core\Rpc\Swoole\RmRemotingClient;

class RMClient
{

    /**
     * @var \Hyperf\Seata\Core\Rpc\Swoole\RmRemotingClient
     */
    protected $rmRpcClient;

    /**
     * @var \Hyperf\Contract\ConfigInterface
     */
    protected $config;
    /**
     * @var \Hyperf\Seata\Rm\DefaultRMHandler
     */
    protected $RMHandler;

    /**
     * @var \Hyperf\Seata\Core\Model\ResourceManager
     */
    protected $resourceManager;

    public function __construct(ResourceManager $resourceManager, RmRemotingClient $rmRpcClient, ConfigInterface $config, DefaultRMHandler $RMHandler)
    {
        $this->rmRpcClient = $rmRpcClient;
        $this->config = $config;
        $this->RMHandler = $RMHandler;
        $this->resourceManager = $resourceManager;
    }

    public function init(string $applicationId, string $transactionServiceGroup): void {
        $this->rmRpcClient->setApplicationId($applicationId);
        $this->rmRpcClient->setTransactionServiceGroup($transactionServiceGroup);
        $this->rmRpcClient->setTransactionMessageHandler(DefaultRMHandler::get());
        $this->rmRpcClient->init();
    }

}