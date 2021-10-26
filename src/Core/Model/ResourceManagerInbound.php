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
