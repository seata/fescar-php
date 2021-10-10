<?php

namespace Hyperf\Seata\Rm\DataSource;



use Hyperf\Seata\Logger\LoggerFactory;
use Hyperf\Seata\Rm\DefaultResourceManager;
use Psr\Container\ContainerInterface;

class DataSourceProxyFactory
{

    public function __invoke(ContainerInterface $container)
    {
        $instance = new DataSourceProxy($container->get(LoggerFactory::class), $container->get(DefaultResourceManager::class));
        $instance->init($container->get(MysqlConnectionProxy::class));
        return $instance;
    }

}