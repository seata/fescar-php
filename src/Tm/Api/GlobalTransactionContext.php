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

use Hyperf\Seata\Core\Context\RootContext;
use Hyperf\Seata\Core\Model\GlobalStatus;
use Hyperf\Seata\Exception\TransactionException;

class GlobalTransactionContext
{
    /**
     * Try to create a new GlobalTransaction.
     *
     * @return DefaultGlobalTransaction the new global Transaction
     */
    public static function createNew(): DefaultGlobalTransaction
    {
        return new DefaultGlobalTransaction(null, new GlobalStatus(GlobalStatus::UnKnown), new GlobalTransactionRole(GlobalTransactionRole::Participant));
    }

    /**
     * Get GlobalTransaction instance bind on current thread.
     *
     * @return null|DefaultGlobalTransaction if no Transaction context there
     */
    public static function getCurrent(): ?DefaultGlobalTransaction
    {
        $xid = RootContext::getXID();
        if (empty($xid)) {
            return null;
        }
        return new DefaultGlobalTransaction($xid, new GlobalStatus(GlobalStatus::Begin), new GlobalTransactionRole(GlobalTransactionRole::Participant));
    }

    /**
     * Get GlobalTransaction instance bind on current thread. Create a new on if no existing there.
     *
     * @return DefaultGlobalTransaction new context if no existing there
     */
    public function getCurrentOrCreate(): DefaultGlobalTransaction
    {
        $tx = $this->getCurrent();
        if (empty($tx)) {
            return self::createNew();
        }
        return $tx;
    }

    /**
     * Reload GlobalTransaction instance according to the given XID.
     *
     * @param string $xid the xid
     * @throws TransactionException the Transaction exception
     * @return ReloadDefaultGlobalTransaction reloaded Transaction instance
     */
    public function reload(string $xid)
    {
        return new ReloadDefaultGlobalTransaction($xid, new GlobalStatus(GlobalStatus::UnKnown), new GlobalTransactionRole(GlobalTransactionRole::Launcher));
    }
}
