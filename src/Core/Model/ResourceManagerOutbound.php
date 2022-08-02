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

interface ResourceManagerOutbound
{
    /**
     * Branch register long.
     *
     * @param $branchType the branch type
     * @param $resourceId the resource id
     * @param $clientId   the client id
     * @param $xid        the xid
     * @param $applicationData the context
     * @param $lockKeys   the lock keys
     * @throws TransactionException the transaction exception
     */
    public function branchRegister(
        int $branchType,
        string $resourceId,
        string $clientId,
        string $xid,
        string $applicationData,
        string $lockKeys
    ): int;

    /**
     * Branch report.
     *
     * @param $branchType      the branch type
     * @param $xid             the xid
     * @param $branchId        the branch id
     * @param $status          the status
     * @param $applicationData the application data
     * @throws TransactionException the transaction exception
     */
    public function branchReport(
        int $branchType,
        string $xid,
        int $branchId,
        int $status,
        string $applicationData
    ): void;

    /**
     * Lock query boolean.
     *
     * @param $branchType the branch type
     * @param $resourceId the resource id
     * @param $xid        the xid
     * @param $lockKeys   the lock keys
     * @throws TransactionException the transaction exception
     */
    public function lockQuery(int $branchType, string $resourceId, string $xid, string $lockKeys): bool;
}
