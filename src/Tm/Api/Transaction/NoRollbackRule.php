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

class NoRollbackRule extends RollbackRule
{
    public static $DEFAULT_NO_ROLLBACK_RULE;

    public function __construct(string $exception)
    {
        // @todo 这里需要看看是否正确的实现
        parent::__construct($exception);
        self::$DEFAULT_NO_ROLLBACK_RULE = $exception;
    }

    public function __toString()
    {
        return 'No' . parent::__toString();
    }
}
