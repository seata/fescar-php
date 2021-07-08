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
namespace Hyperf\Seata\Annotation;

use Hyperf\Contract\ConfigInterface;
use Hyperf\Contract\StdoutLoggerInterface;
use Hyperf\Seata\Rm\RMClient;
use Psr\Container\ContainerInterface;

class GlobalTransactionScannerFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $config = $container->get(ConfigInterface::class);
        $logger = $container->get(StdoutLoggerInterface::class);
        $RMClient = $container->get(RMClient::class);
        return new GlobalTransactionScanner($config, $logger, $RMClient);
    }
}
