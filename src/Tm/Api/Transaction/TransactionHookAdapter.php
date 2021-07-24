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

class TransactionHookAdapter implements TransactionHook
{
    public function beforeBegin()
    {
    }

    public function afterBegin()
    {
    }

    public function beforeCommit()
    {
    }

    public function afterCommit()
    {
    }

    public function beforeRollback()
    {
    }

    public function afterRollback()
    {
    }

    public function afterCompletion()
    {
    }
}
