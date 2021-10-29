<?php

namespace Hyperf\Seata\Rm\DataSource;



use Hyperf\Database\Connection;
use Hyperf\Database\ConnectionResolverInterface;
use Hyperf\DbConnection\Connection as DbConnection;
use Hyperf\DbConnection\Pool\PoolFactory;
use Hyperf\Seata\Logger\LoggerFactory;
use Hyperf\Seata\Rm\DefaultResourceManager;
use Hyperf\Utils\ApplicationContext;
use Psr\Container\ContainerInterface;

class DataSourceProxyFactory
{

    public function __invoke(ContainerInterface $container)
    {
        $instance = new DataSourceProxy($container->get(LoggerFactory::class), $container->get(DefaultResourceManager::class));

        //Connection::resolverFor('mysql', function ($connection, string $database, string $prefix, array $config) {
        //    return new MysqlConnectionProxy($connection, $database, $prefix, $config);
        //});

        $mysqlConnectinProxy = $container->get(PoolFactory::class)->getPool('default')->get();

        echo '<pre>';var_dump($mysqlConnectinProxy);echo '</pre>';exit();

        $instance->init($mysqlConnectinProxy, $instance->resourceGroupId);
        return $instance;
    }

}