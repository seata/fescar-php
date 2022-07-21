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
namespace Hyperf\Seata\Core\Model;

use Hyperf\Seata\Exception\TransactionException;

/**
 * Transaction Manager.
 * Define a global transaction and control it.
 */
interface TransactionManager
{
    /**
     * Begin a new global transaction.
     *
     * @param $applicationId           ID of the application who begins this transaction
     * @param $transactionServiceGroup ID of the transaction service group
     * @param $name                    Give a name to the global transaction
     * @param $timeout                 Timeout of the global transaction
     * @throws TransactionException any exception that fails this will be wrapped with TransactionException and thrown
     *                              out
     * @return string XID of the global transaction
     */
    public function begin(?string $applicationId, ?string $transactionServiceGroup, string $name, int $timeout): string;

    /**
     * Global commit.
     *
     * @param $xid XID of the global transaction
     * @throws TransactionException any exception that fails this will be wrapped with TransactionException and thrown
     *                              out
     * @return int the value of GlobalStatus, status of the global transaction after committing
     */
    public function commit(string $xid): GlobalStatus;

    /**
     * Global rollback.
     *
     * @param $xid XID of the global transaction
     * @throws TransactionException any exception that fails this will be wrapped with TransactionException and thrown
     *                              out
     * @return int the value of GlobalStatus, status of the global transaction after rollbacking
     */
    public function rollback(string $xid): GlobalStatus;

    /**
     * Get current status of the give transaction.
     *
     * @param $xid XID of the global transaction
     * @throws TransactionException any exception that fails this will be wrapped with TransactionException and thrown
     *                              out
     * @return int the value of GlobalStatus, current status of the global transaction
     */
    public function getStatus(string $xid): int;
}
