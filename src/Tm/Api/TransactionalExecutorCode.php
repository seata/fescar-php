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
namespace Hyperf\Seata\Tm\Api;

class TransactionalExecutorCode
{
    /**
     * Begin failure code.
     */
    const BeginFailure = 0;

    /**
     * Commit failure code.
     */
    const CommitFailure = 1;

    /**
     * Rollback failure code.
     */
    const RollbackFailure = 2;

    /**
     * Rollback done code.
     */
    const RollbackDone = 3;

    /**
     * Report failure code.
     */
    const ReportFailure = 4;

    /**
     * Rollback retrying code.
     */
    const RollbackRetrying = 5;
}
