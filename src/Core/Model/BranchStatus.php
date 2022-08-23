<?php

declare(strict_types=1);
/**
 * Copyright 2019-2022 Seata.io Group.
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
namespace Hyperf\Seata\Core\Model;

class BranchStatus
{
    /**
     * Unknown branch status.
     */
    // Unknown
    public const Unknown = 0;

    /**
     * The Registered.
     */
    // Registered to TC.
    public const Registered = 1;

    /**
     * The Phase one done.
     */
    // Branch logic is successfully done at phase one.
    public const PhaseOne_Done = 2;

    /**
     * The Phase one failed.
     */
    // Branch logic is failed at phase one.
    public const PhaseOne_Failed = 3;

    /**
     * The Phase one timeout.
     */
    // Branch logic is NOT reported for a timeout.
    public const PhaseOne_Timeout = 4;

    /**
     * The Phase two committed.
     */
    // Commit logic is successfully done at phase two.
    public const PhaseTwo_Committed = 5;

    /**
     * The Phase two commit failed retryable.
     */
    // Commit logic is failed but retryable.
    public const PhaseTwo_CommitFailed_Retryable = 6;

    /**
     * The Phase two commit failed unretryable.
     */
    // Commit logic is failed and NOT retryable.
    public const PhaseTwo_CommitFailed_Unretryable = 7;

    /**
     * The Phase two rollbacked.
     */
    // Rollback logic is successfully done at phase two.
    public const PhaseTwo_Rollbacked = 8;

    /**
     * The Phase two rollback failed retryable.
     */
    // Rollback logic is failed but retryable.
    public const PhaseTwo_RollbackFailed_Retryable = 9;

    /**
     * The Phase two rollback failed unretryable.
     */
    // Rollback logic is failed but NOT retryable.
    public const PhaseTwo_RollbackFailed_Unretryable = 10;
}
