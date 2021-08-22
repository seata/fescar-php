<?php


namespace Hyperf\Seata\Common;


use Hyperf\Seata\Exception\IllegalArgumentException;
use Hyperf\Utils\Context;

class InnerEnhancedServiceLoader
{
    public static function getServiceLoader($type): InnerEnhancedServiceLoader
    {
        if ($type == null) {
            throw new IllegalArgumentException("Enhanced Service type == null");
        }
        return Context::getOrSet(sprintf('InnerEnhancedServiceLoader:serviceLoader:%s', $type), $type);
    }


    public function loadAll()
    {

    }
}