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
namespace Hyperf\Seata\Tm\Api\Transaction;

interface TransactionHook
{
    /**
     * before tx begin.
     */
    public function beforeBegin();

    /**
     * after tx begin.
     */
    public function afterBegin();

    /**
     * before tx commit.
     */
    public function beforeCommit();

    /**
     * after tx commit.
     */
    public function afterCommit();

    /**
     * before tx rollback.
     */
    public function beforeRollback();

    /**
     * after tx rollback.
     */
    public function afterRollback();

    /**
     * after tx all Completed.
     */
    public function afterCompletion();
}
