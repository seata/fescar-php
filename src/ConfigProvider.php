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
namespace Hyperf\Seata;


use Hyperf\Seata\Annotation\GlobalTransactionScanner;
use Hyperf\Seata\Annotation\GlobalTransactionScannerFactory;
use Hyperf\Seata\Core\Model\ResourceManagerInterface;
use Hyperf\Seata\Core\Rpc\RpcClientBootstrapInterface;
use Hyperf\Seata\Core\Rpc\Swoole\SwooleRpcClientBootstrap;
use Hyperf\Seata\Listener\InitListener;
use Hyperf\Seata\Logger\LoggerInterface;
use Hyperf\Seata\Logger\StdoutLogger;
use Hyperf\Seata\Rm\DefaultResourceManager;

class ConfigProvider
{
    public function __invoke(): array
    {
        return [
            'listeners' => [
                InitListener::class,
            ],
            'dependencies' => [
                ResourceManagerInterface::class => DefaultResourceManager::class,
                GlobalTransactionScanner::class => GlobalTransactionScannerFactory::class,
                LoggerInterface::class => StdoutLogger::class,
                RpcClientBootstrapInterface::class => SwooleRpcClientBootstrap::class,
            ],
        ];
    }
}
