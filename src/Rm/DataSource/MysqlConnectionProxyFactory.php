<?php

namespace Hyperf\Rm\DataSource;


use Hyperf\DbConnection\Connection;
use Hyperf\Seata\Rm\DataSource\MysqlConnectionProxy;
use Psr\Container\ContainerInterface;

class MysqlConnectionProxyFactory
{

    public function __invoke(ContainerInterface $container)
    {
        echo '<pre>';var_dump(1);echo '</pre>';exit();
        Connection::resolverFor('mysql', function ($connection, string $database, string $prefix, array $config) {
            return new MysqlConnectionProxy($connection, $database, $prefix, $config);
        });
        $connection = $container->get(Connection::class);
        $mysqlConnectinProxy = $connection->getActiveConnection();
        echo '<pre>';var_dump($mysqlConnectinProxy);echo '</pre>';exit();
    }

}