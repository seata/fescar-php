<?php

namespace Hyperf\Seata\Annotation;


use Hyperf\Contract\ConfigInterface;
use Hyperf\Contract\StdoutLoggerInterface;
use Hyperf\Seata\Rm\RMClient;
use Hyperf\Seata\Tm\TMClient;
use Psr\Container\ContainerInterface;

class GlobalTransactionScannerFactory
{

    public function __invoke(ContainerInterface $container)
    {
        $config = $container->get(ConfigInterface::class);
        $logger = $container->get(StdoutLoggerInterface::class);
        $RMClient = $container->get(RMClient::class);
        $TMClient = $container->get(TMClient::class);
        return new GlobalTransactionScanner($config, $logger, $RMClient, $TMClient);
    }

}