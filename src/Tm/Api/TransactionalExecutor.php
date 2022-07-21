<?php

declare(strict_types=1);
/**
 * Copyright 1999-2022 Seata.io Group.
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
namespace Hyperf\Seata\Tm\Api;

use Hyperf\Seata\Tm\Api\Transaction\TransactionInfo;
use Throwable;

interface TransactionalExecutor
{
    /**
     * Execute the business logic here.
     *
     * @throws Throwable any throwable during executing
     * @return What the business logic returns
     */
    public function execute();

    /**
     * Transaction conf or other attr.
     * @return TransactionInfo Transaction info
     */
    public function getTransactionInfo(): ?TransactionInfo;
}
