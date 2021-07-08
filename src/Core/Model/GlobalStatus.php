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

class GlobalStatus
{
    /**
     * Un known global status.
     */
    // Unknown
    public const UnKnown = 0;

    /**
     * The Begin.
     */
    // PHASE 1: can accept new branch registering.
    public const Begin = 1;

    /**
     * PHASE 2: Running Status: may be changed any time.
     */
    // Committing.
    public const Committing = 2;

    /**
     * The Commit retrying.
     */
    // Retrying commit after a recoverable failure.
    public const CommitRetrying = 3;

    /**
     * Rollbacking global status.
     */
    // Rollbacking
    public const Rollbacking = 4;

    /**
     * The Rollback retrying.
     */
    // Retrying rollback after a recoverable failure.
    public const RollbackRetrying = 5;

    /**
     * The Timeout rollbacking.
     */
    // Rollbacking since timeout
    public const TimeoutRollbacking = 6;

    /**
     * The Timeout rollback retrying.
     */
    // Retrying rollback (since timeout) after a recoverable failure.
    public const TimeoutRollbackRetrying = 7;

    /**
     * All branches can be async committed. The committing is NOT const done = ye; but it can be seen as committed for TM/RM
     * client.
     */
    public const AsyncCommitting = 8;

    /**
     * PHASE 2: Final Status: will NOT change any more.
     */
    // Finally: global transaction is successfully committed.
    public const Committed = 9;

    /**
     * The Commit failed.
     */
    // Finally: failed to commit
    public const CommitFailed = 10;

    /**
     * The Rollbacked.
     */
    // Finally: global transaction is successfully rollbacked.
    public const Rollbacked = 11;

    /**
     * The Rollback failed.
     */
    // Finally: failed to rollback
    public const RollbackFailed = 12;

    /**
     * The Timeout rollbacked.
     */
    // Finally: global transaction is successfully rollbacked since timeout.
    public const TimeoutRollbacked = 13;

    /**
     * The Timeout rollback failed.
     */
    // Finally: failed to rollback since timeout
    public const TimeoutRollbackFailed = 14;

    /**
     * The Finished.
     */
    // Not managed in session MAP any more
    public const Finished = 15;
}
