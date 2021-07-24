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

use Hyperf\Utils\Context;

class TransactionHookManager
{
    /**
     * @return TransactionHook[]
     */
    public static function getHooks(): array
    {
        // @todo 这里的key,看看怎么改
        $lockHooks = Context::get(static::class);

        if (empty($lockHooks)) {
            return [];
        }
        return $lockHooks;
    }

    public static function registerHook(TransactionHook $transactionHook)
    {
        // @todo 这里的key,看看怎么改
        $lockHooks = Context::get(static::class, []);
        $lockHooks[] = $transactionHook;
        Context::set('TransactionHookManager:LOCAL_HOOKS', $lockHooks);
    }

    public static function clear()
    {
        Context::set(static::class, null);
    }
}
