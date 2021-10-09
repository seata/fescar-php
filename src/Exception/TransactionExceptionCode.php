<?php

namespace Hyperf\Seata\Exception;


class TransactionExceptionCode
{

    /**
     * Unknown transaction exception code.
     */
    //
    const Unknown = 0;

    /**
     * Lock key conflict transaction exception code.
     */
    //
    const LockKeyConflict = 1;

    /**
     * Io transaction exception code.
     */
    //
    const IO = 2;

    /**
     * Branch rollback failed retriable transaction exception code.
     */
    //
    const BranchRollbackFailed_Retriable = 3;

    /**
     * Branch rollback failed unretriable transaction exception code.
     */
    //
    const BranchRollbackFailed_Unretriable = 4;

    /**
     * Branch register failed transaction exception code.
     */
    //
    const BranchRegisterFailed = 5;

    /**
     * Branch report failed transaction exception code.
     */
    //
    const BranchReportFailed = 6;

    /**
     * Lockable check failed transaction exception code.
     */
    //
    const LockableCheckFailed = 7;

    /**
     * Branch transaction not exist transaction exception code.
     */
    //
    const BranchTransactionNotExist = 8;

    /**
     * Global transaction not exist transaction exception code.
     */
    //
    const GlobalTransactionNotExist = 9;

    /**
     * Global transaction not active transaction exception code.
     */
    //
    const GlobalTransactionNotActive = 10;

    /**
     * Global transaction status invalid transaction exception code.
     */
    //
    const GlobalTransactionStatusInvalid = 11;

    /**
     * Failed to send branch commit request transaction exception code.
     */
    //
    const FailedToSendBranchCommitRequest = 12;

    /**
     * Failed to send branch rollback request transaction exception code.
     */
    //
    const FailedToSendBranchRollbackRequest = 13;

    /**
     * Failed to add branch transaction exception code.
     */
    //
    const FailedToAddBranch = 14;
    /**
     *  Failed to lock global transaction exception code.
     */
    const FailedLockGlobalTranscation = 15;

    /**
     * FailedWriteSession
     */
    const FailedWriteSession = 16;

}