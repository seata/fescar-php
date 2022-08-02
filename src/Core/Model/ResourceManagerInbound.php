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
namespace Hyperf\Seata\Core\Model;

interface ResourceManagerInbound
{
    /**
     * Commit a branch transaction.
     *
     * @param $branchType      the branch type
     * @param $xid             Transaction id
     * @param $branchId        Branch id
     * @param $resourceId      Resource id
     * @param $applicationData Application data bind with this branch
     * @throws TransactionException any exception that fails this will be wrapped with TransactionException and thrown
     *                              out
     * @return int the value of BranchStatus, status of the branch after committing
     */
    public function branchCommit(
        int $branchType,
        string $xid,
        int $branchId,
        string $resourceId,
        string $applicationData
    ): int;

    /**
     * Rollback a branch transaction.
     *
     * @param $branchType      the branch type
     * @param $xid             Transaction id
     * @param $branchId        Branch id
     * @param $resourceId      Resource id
     * @param $applicationData Application data bind with this branch
     * @throws TransactionException any exception that fails this will be wrapped with TransactionException and thrown
     *                              out
     * @return int the value of BranchStatus, status of the branch after rollbacking
     */
    public function branchRollback(
        int $branchType,
        string $xid,
        int $branchId,
        string $resourceId,
        string $applicationData
    ): int;
}
