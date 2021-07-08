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
namespace Hyperf\Seata\Core\Model;

interface ResourceManagerInbound
{
    /**
     * Commit a branch transaction.
     *
     * @param $branchType      the branch type
     * @param $xid             transaction id
     * @param $branchId        branch id
     * @param $resourceId      resource id
     * @param $applicationData application data bind with this branch
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
     * @param $xid             transaction id
     * @param $branchId        branch id
     * @param $resourceId      resource id
     * @param $applicationData application data bind with this branch
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
