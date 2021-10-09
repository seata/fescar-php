<?php


namespace Hyperf\Seata\Core\Model;

use Hyperf\Seata\Exception\TransactionException;

/**
 * Transaction Manager.
 * Define a global transaction and control it.
 */
interface TransactionManager
{

    /**
     * Begin a new global transaction.
     *
     * @param $applicationId           ID of the application who begins this transaction.
     * @param $transactionServiceGroup ID of the transaction service group.
     * @param $name                    Give a name to the global transaction.
     * @param $timeout                 Timeout of the global transaction.
     * @return string XID of the global transaction
     * @throws TransactionException Any exception that fails this will be wrapped with TransactionException and thrown
     * out.
     */
    public function begin(string $applicationId, string $transactionServiceGroup, string $name, int $timeout): string;

    /**
     * Global commit.
     *
     * @param $xid XID of the global transaction.
     * @return int The value of GlobalStatus, status of the global transaction after committing.
     * @throws TransactionException Any exception that fails this will be wrapped with TransactionException and thrown
     * out.
     */
    public function commit(string $xid): int;

    /**
     * Global rollback.
     *
     * @param $xid XID of the global transaction
     * @return int The value of GlobalStatus, status of the global transaction after rollbacking.
     * @throws TransactionException Any exception that fails this will be wrapped with TransactionException and thrown
     * out.
     */
    public function rollback(string $xid): int;

    /**
     * Get current status of the give transaction.
     *
     * @param $xid XID of the global transaction.
     * @return int The value of GlobalStatus, current status of the global transaction.
     * @throws TransactionException Any exception that fails this will be wrapped with TransactionException and thrown
     * out.
     */
    public function getStatus(string $xid): int;
}