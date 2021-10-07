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
namespace Hyperf\Seata\Rm;

use Hyperf\Contract\ConfigInterface;
use Hyperf\Seata\Core\Model\ResourceManager;
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

    public function init(string $applicationId, string $transactionServiceGroup): void
    {
        $this->rmRpcClient->setApplicationId($applicationId);
        $this->rmRpcClient->setTransactionServiceGroup($transactionServiceGroup);
//        $this->rmRpcClient->setTransactionMessageHandler(DefaultRMHandler::get());
        $this->rmRpcClient->init();
    }
}
