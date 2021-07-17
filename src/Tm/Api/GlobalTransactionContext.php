<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
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
     * @return DefaultGlobalTransaction the new global transaction
     */
    public static function createNew(): DefaultGlobalTransaction
    {
        return new DefaultGlobalTransaction(null, new GlobalStatus(GlobalStatus::UnKnown), new GlobalTransactionRole(GlobalTransactionRole::Participant));
    }

    /**
     * Get GlobalTransaction instance bind on current thread.
     *
     * @return null|DefaultGlobalTransaction if no transaction context there
     */
    public function getCurrent(): ?DefaultGlobalTransaction
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
     * @throws TransactionException the transaction exception
     * @return ReloadDefaultGlobalTransaction reloaded transaction instance
     */
    public function reload(string $xid)
    {
        return new ReloadDefaultGlobalTransaction($xid, new GlobalStatus(GlobalStatus::UnKnown), new GlobalTransactionRole(GlobalTransactionRole::Launcher));
    }
}
