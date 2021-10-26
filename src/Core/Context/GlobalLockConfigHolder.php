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
namespace Hyperf\Seata\Core\Context;

use Hyperf\Seata\Core\Model\GlobalLockConfig;
use Hyperf\Utils\Context;

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
