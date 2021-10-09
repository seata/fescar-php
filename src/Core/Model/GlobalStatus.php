<?php

namespace Hyperf\Seata\Core\Model;


class GlobalStatus
{

    /**
     * Un known global status.
     */
    // Unknown
    const UnKnown = 0;

    /**
     * The Begin.
     */
    // PHASE 1: can accept new branch registering.
    const Begin = 1;

    /**
     * PHASE 2: Running Status: may be changed any time.
     */
    // Committing.
    const Committing = 2;

    /**
     * The Commit retrying.
     */
    // Retrying commit after a recoverable failure.
    const CommitRetrying = 3;

    /**
     * Rollbacking global status.
     */
    // Rollbacking
    const Rollbacking = 4;

    /**
     * The Rollback retrying.
     */
    // Retrying rollback after a recoverable failure.
    const RollbackRetrying = 5;

    /**
     * The Timeout rollbacking.
     */
    // Rollbacking since timeout
    const TimeoutRollbacking = 6;

    /**
     * The Timeout rollback retrying.
     */
    // Retrying rollback (since timeout) after a recoverable failure.
    const TimeoutRollbackRetrying = 7;

    /**
     * All branches can be async committed. The committing is NOT const done = ye; but it can be seen as committed for TM/RM
     * client.
     */
    const AsyncCommitting = 8;

    /**
     * PHASE 2: Final Status: will NOT change any more.
     */
    // Finally: global transaction is successfully committed.
    const Committed = 9;

    /**
     * The Commit failed.
     */
    // Finally: failed to commit
    const CommitFailed = 10;

    /**
     * The Rollbacked.
     */
    // Finally: global transaction is successfully rollbacked.
    const Rollbacked = 11;

    /**
     * The Rollback failed.
     */
    // Finally: failed to rollback
    const RollbackFailed = 12;

    /**
     * The Timeout rollbacked.
     */
    // Finally: global transaction is successfully rollbacked since timeout.
    const TimeoutRollbacked = 13;

    /**
     * The Timeout rollback failed.
     */
    // Finally: failed to rollback since timeout
    const TimeoutRollbackFailed = 14;

    /**
     * The Finished.
     */
    // Not managed in session MAP any more
    const Finished = 15;

}