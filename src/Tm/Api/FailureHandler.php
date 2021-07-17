<?php


namespace Hyperf\Seata\Tm\Api;


use Throwable;

interface FailureHandler
{
    /**
     * On begin failure.
     *
     * @param GlobalTransaction $tx    the tx
     * @param Throwable $cause the cause
     */
    public function onBeginFailure(GlobalTransaction $tx, Throwable $cause);

    /**
     * On commit failure.
     *
     * @param GlobalTransaction $tx    the tx
     * @param Throwable $cause the cause
     */
    public function  onCommitFailure(GlobalTransaction $tx, Throwable $cause);

    /**
     * On rollback failure.
     *
     * @param GlobalTransaction $tx                the tx
     * @param Throwable $originalException the originalException
     */
    public function  onRollbackFailure(GlobalTransaction $tx, Throwable $originalException);

    /**
     * On rollback retrying
     *
     * @param GlobalTransaction $tx                the tx
     * @param Throwable $originalException the originalException
     */
    public function onRollbackRetrying(GlobalTransaction $tx, Throwable $originalException);
}