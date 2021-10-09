<?php


namespace Hyperf\Seata\Core\Model;


interface ResourceManagerInbound
{

    /**
     * Commit a branch transaction.
     *
     * @param $branchType      the branch type
     * @param $xid             Transaction id.
     * @param $branchId        Branch id.
     * @param $resourceId      Resource id.
     * @param $applicationData Application data bind with this branch.
     * @return int The value of BranchStatus, status of the branch after committing.
     * @throws TransactionException Any exception that fails this will be wrapped with TransactionException and thrown
     *                              out.
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
     * @param $xid             Transaction id.
     * @param $branchId        Branch id.
     * @param $resourceId      Resource id.
     * @param $applicationData Application data bind with this branch.
     * @return int The value of BranchStatus, status of the branch after rollbacking.
     * @throws TransactionException Any exception that fails this will be wrapped with TransactionException and thrown
     *                              out.
     */
    public function branchRollback(
        int $branchType,
        string $xid,
        int $branchId,
        string $resourceId,
        string $applicationData
    ): int;

}