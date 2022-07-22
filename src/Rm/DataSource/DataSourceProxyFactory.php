<?php

declare(strict_types=1);
/**
 * Copyright 2019-2022 Seata.io Group.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 */
namespace Hyperf\Seata\Rm\DataSource;

use Hyperf\Database\Connection;
use Hyperf\DbConnection\Pool\PoolFactory;
use Hyperf\Seata\Logger\LoggerFactory;
use Hyperf\Seata\Rm\DefaultResourceManager;
use Psr\Container\ContainerInterface;

class DataSourceProxyFactory
{
    public function __invoke(ContainerInterface $container)
    {
        return new DataSourceProxy($container->get(LoggerFactory::class), $container->get(DefaultResourceManager::class));
        // Connection::resolverFor('mysql', function ($connection, string $database, string $prefix, array $config) {
        //    return new MysqlConnectionProxy($connection, $database, $prefix, $config);
        // });

//        $mysqlConnectinProxy = $container->get(PoolFactory::class)->getPool('default')->get();

//        echo '<pre>';var_dump($mysqlConnectinProxy);echo '</pre>';exit();

//        $instance->init($mysqlConnectinProxy, $instance->resourceGroupId);
    }
}
