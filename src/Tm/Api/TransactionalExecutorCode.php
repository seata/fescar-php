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
    public const BeginFailure = 0;

    /**
     * Commit failure code.
     */
    public const CommitFailure = 1;

    /**
     * Rollback failure code.
     */
    public const RollbackFailure = 2;

    /**
     * Rollback done code.
     */
    public const RollbackDone = 3;

    /**
     * Report failure code.
     */
    public const ReportFailure = 4;

    /**
     * Rollback retrying code.
     */
    public const RollbackRetrying = 5;
}
