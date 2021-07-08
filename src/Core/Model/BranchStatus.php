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
