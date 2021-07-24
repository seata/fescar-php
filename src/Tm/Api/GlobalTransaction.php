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
