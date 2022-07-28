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
namespace Hyperf\Seata\Listener;

use Hyperf\DbConnection\Db;
use Hyperf\Event\Contract\ListenerInterface;
use Hyperf\Framework\Event\MainWorkerStart;
use Hyperf\Seata\Annotation\GlobalTransactionScanner;
use Hyperf\Seata\Rm\DataSource\DataSourceProxy;
use Hyperf\Server\Event\MainCoroutineServerStart;

class InitListener implements ListenerInterface
{
    protected GlobalTransactionScanner $globalTransactionScanner;

    protected DataSourceProxy $dataSourceProxy;

    public function __construct(GlobalTransactionScanner $globalTransactionScanner, DataSourceProxy $dataSourceProxy)
    {
        $this->globalTransactionScanner = $globalTransactionScanner;
        $this->dataSourceProxy = $dataSourceProxy;
    }

    public function listen(): array
    {
        return [
            MainCoroutineServerStart::class,
            MainWorkerStart::class,
        ];
    }

    public function process(object $event): void
    {
        // Execute any sql to init the database connection
        Db::select('select 1');
        // Init TM and RM clients
        $this->globalTransactionScanner->initClients();
    }
}
