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

use Throwable;

interface FailureHandler
{
    /**
     * On begin failure.
     *
     * @param GlobalTransaction $tx the tx
     * @param Throwable $cause the cause
     */
    public function onBeginFailure(GlobalTransaction $tx, Throwable $cause);

    /**
     * On commit failure.
     *
     * @param GlobalTransaction $tx the tx
     * @param Throwable $cause the cause
     */
    public function onCommitFailure(GlobalTransaction $tx, Throwable $cause);

    /**
     * On rollback failure.
     *
     * @param GlobalTransaction $tx the tx
     * @param Throwable $originalException the originalException
     */
    public function onRollbackFailure(GlobalTransaction $tx, Throwable $originalException);

    /**
     * On rollback retrying.
     *
     * @param GlobalTransaction $tx the tx
     * @param Throwable $originalException the originalException
     */
    public function onRollbackRetrying(GlobalTransaction $tx, Throwable $originalException);
}
