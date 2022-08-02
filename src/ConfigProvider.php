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
namespace Hyperf\Seata;

use Hyperf\Seata\Annotation\GlobalTransactionScanner;
use Hyperf\Seata\Core\Model\ResourceManagerInterface;
use Hyperf\Seata\Listener\InitListener;
use Hyperf\Seata\Logger\LoggerInterface;
use Hyperf\Seata\Logger\StdoutLogger;
use Hyperf\Seata\Rm\DataSource\DataSourceProxy;
use Hyperf\Seata\Rm\DataSource\DataSourceProxyFactory;
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
                //                GlobalTransactionScanner::class => GlobalTransactionScannerFactory::class,
                LoggerInterface::class => StdoutLogger::class,
                //                DataSourceProxy::class => DataSourceProxyFactory::class,
            ],
            'annotations' => [
                'paths' => [
                    __DIR__,
                ],
            ],
        ];
    }
}
