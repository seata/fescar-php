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
namespace Hyperf\Seata\Exception;

class TransactionExceptionCode
{
    /**
     * Unknown Transaction exception code.
     */
    public const Unknown = 0;

    /**
     * Lock key conflict Transaction exception code.
     */
    public const LockKeyConflict = 1;

    /**
     * Io Transaction exception code.
     */
    public const IO = 2;

    /**
     * Branch rollback failed retriable Transaction exception code.
     */
    public const BranchRollbackFailed_Retriable = 3;

    /**
     * Branch rollback failed unretriable Transaction exception code.
     */
    public const BranchRollbackFailed_Unretriable = 4;

    /**
     * Branch register failed Transaction exception code.
     */
    public const BranchRegisterFailed = 5;

    /**
     * Branch report failed Transaction exception code.
     */
    public const BranchReportFailed = 6;

    /**
     * Lockable check failed Transaction exception code.
     */
    public const LockableCheckFailed = 7;

    /**
     * Branch Transaction not exist Transaction exception code.
     */
    public const BranchTransactionNotExist = 8;

    /**
     * Global Transaction not exist Transaction exception code.
     */
    public const GlobalTransactionNotExist = 9;

    /**
     * Global Transaction not active Transaction exception code.
     */
    public const GlobalTransactionNotActive = 10;

    /**
     * Global Transaction status invalid Transaction exception code.
     */
    public const GlobalTransactionStatusInvalid = 11;

    /**
     * Failed to send branch commit request Transaction exception code.
     */
    public const FailedToSendBranchCommitRequest = 12;

    /**
     * Failed to send branch rollback request Transaction exception code.
     */
    public const FailedToSendBranchRollbackRequest = 13;

    /**
     * Failed to add branch Transaction exception code.
     */
    public const FailedToAddBranch = 14;

    /**
     *  Failed to lock global Transaction exception code.
     */
    public const FailedLockGlobalTranscation = 15;

    /**
     * FailedWriteSession.
     */
    public const FailedWriteSession = 16;
}
