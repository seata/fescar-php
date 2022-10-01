<?php

declare(strict_types=1);
/**
 * Copyright 2019-2022 Seata.io Group.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 */
namespace Hyperf\Seata\Tm\Api\Transaction;

use Hyperf\Context\Context;

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
