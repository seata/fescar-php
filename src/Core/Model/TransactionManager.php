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

use Hyperf\Seata\Exception\TransactionException;

/**
 * Transaction Manager.
 * Define a global Transaction and control it.
 */
interface TransactionManager
{
    /**
     * Begin a new global Transaction.
     *
     * @param $applicationId           ID of the application who begins this Transaction
     * @param $transactionServiceGroup ID of the Transaction service group
     * @param $name                    give a name to the global Transaction
     * @param $timeout                 timeout of the global Transaction
     * @throws TransactionException any exception that fails this will be wrapped with TransactionException and thrown
     *                              out
     * @return string XID of the global Transaction
     */
    public function begin(?string $applicationId, ?string $transactionServiceGroup, string $name, int $timeout): string;

    /**
     * Global commit.
     *
     * @param $xid XID of the global Transaction
     * @throws TransactionException any exception that fails this will be wrapped with TransactionException and thrown
     *                              out
     * @return int the value of GlobalStatus, status of the global Transaction after committing
     */
    public function commit(string $xid): GlobalStatus;

    /**
     * Global rollback.
     *
     * @param $xid XID of the global Transaction
     * @throws TransactionException any exception that fails this will be wrapped with TransactionException and thrown
     *                              out
     * @return int the value of GlobalStatus, status of the global Transaction after rollbacking
     */
    public function rollback(string $xid): GlobalStatus;

    /**
     * Get current status of the give Transaction.
     *
     * @param $xid XID of the global Transaction
     * @throws TransactionException any exception that fails this will be wrapped with TransactionException and thrown
     *                              out
     * @return int the value of GlobalStatus, current status of the global Transaction
     */
    public function getStatus(string $xid): GlobalStatus;

    /**
     * Global report.
     *
     * @param xid XID of the global Transaction.
     * @param globalStatus Status of the global Transaction.
     * @return Status of the global Transaction.
     * @throws TransactionException Any exception that fails this will be wrapped with TransactionException and thrown
     * out.
     */
    public function globalReport(string $xid, GlobalStatus $globalStatus) :GlobalStatus;
}
