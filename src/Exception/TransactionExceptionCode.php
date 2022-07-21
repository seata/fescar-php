<?php

declare(strict_types=1);
/**
 * Copyright 1999-2022 Seata.io Group.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 */
namespace Hyperf\Seata\Exception;

class TransactionExceptionCode
{
    /**
     * Unknown transaction exception code.
     */
    public const Unknown = 0;

    /**
     * Lock key conflict transaction exception code.
     */
    public const LockKeyConflict = 1;

    /**
     * Io transaction exception code.
     */
    public const IO = 2;

    /**
     * Branch rollback failed retriable transaction exception code.
     */
    public const BranchRollbackFailed_Retriable = 3;

    /**
     * Branch rollback failed unretriable transaction exception code.
     */
    public const BranchRollbackFailed_Unretriable = 4;

    /**
     * Branch register failed transaction exception code.
     */
    public const BranchRegisterFailed = 5;

    /**
     * Branch report failed transaction exception code.
     */
    public const BranchReportFailed = 6;

    /**
     * Lockable check failed transaction exception code.
     */
    public const LockableCheckFailed = 7;

    /**
     * Branch transaction not exist transaction exception code.
     */
    public const BranchTransactionNotExist = 8;

    /**
     * Global transaction not exist transaction exception code.
     */
    public const GlobalTransactionNotExist = 9;

    /**
     * Global transaction not active transaction exception code.
     */
    public const GlobalTransactionNotActive = 10;

    /**
     * Global transaction status invalid transaction exception code.
     */
    public const GlobalTransactionStatusInvalid = 11;

    /**
     * Failed to send branch commit request transaction exception code.
     */
    public const FailedToSendBranchCommitRequest = 12;

    /**
     * Failed to send branch rollback request transaction exception code.
     */
    public const FailedToSendBranchRollbackRequest = 13;

    /**
     * Failed to add branch transaction exception code.
     */
    public const FailedToAddBranch = 14;

    /**
     *  Failed to lock global transaction exception code.
     */
    public const FailedLockGlobalTranscation = 15;

    /**
     * FailedWriteSession.
     */
    public const FailedWriteSession = 16;
}
