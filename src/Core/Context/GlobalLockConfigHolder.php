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
namespace Hyperf\Seata\Core\Context;

use Hyperf\Seata\Core\Model\GlobalLockConfig;
use Hyperf\Context\Context;

class GlobalLockConfigHolder
{
    public static function getCurrentGlobalLockConfig()
    {
        return Context::get('GlobalLockConfigHolder');
    }

    public static function setAndReturnPrevious(GlobalLockConfig $config)
    {
        $previous = Context::get('GlobalLockConfigHolder');
        Context::set('GlobalLockConfigHolder', $config);
        return $previous;
    }

    public static function remove()
    {
        Context::set('GlobalLockConfigHolder', null);
    }
}
