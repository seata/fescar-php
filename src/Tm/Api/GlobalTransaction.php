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
namespace Hyperf\Seata\Tm\Api;

use Hyperf\Seata\Core\Model\GlobalStatus;

interface GlobalTransaction
{
    /**
     * Begin a new global Transaction with given timeout and given name.
     *
     * @param null|int $timeout given timeout in MILLISECONDS
     * @param null|string $name given name
     */
    public function begin(?int $timeout = null, ?string $name = null);

    /**
     * Commit the global Transaction.
     */
    public function commit();

    /**
     * Rollback the global Transaction.
     */
    public function rollback();

    /**
     * Suspend the global Transaction.
     *
     * @return SuspendedResourcesHolder
     */
    public function suspend(): ?SuspendedResourcesHolder;

    /**
     * Resume the global Transaction.
     *
     * @see SuspendedResourcesHolder
     */
    public function resume(SuspendedResourcesHolder $suspendedResourcesHolder);

    /**
     * Ask TC for current status of the corresponding global Transaction.
     */
    public function getStatus(): GlobalStatus;

    /**
     * Get XID.
     */
    public function getXid(): ?string;

    /**
     * report the global Transaction status.
     */
    public function globalReport(GlobalStatus $globalStatus);

    /**
     * local status of the global Transaction.
     */
    public function getLocalStatus(): ?GlobalStatus;

    /**
     * get global Transaction role.
     */
    public function getGlobalTransactionRole(): ?GlobalTransactionRole;
}
