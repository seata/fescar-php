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
     * @throws TransactionException the Transaction exception
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
     * @throws TransactionException the Transaction exception
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
     * @throws TransactionException the Transaction exception
     */
    public function lockQuery(int $branchType, string $resourceId, string $xid, string $lockKeys): bool;
}
