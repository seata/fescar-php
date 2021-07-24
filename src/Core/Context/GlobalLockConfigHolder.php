<?php


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