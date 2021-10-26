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
namespace Hyperf\Seata\Common;

use Hyperf\Seata\Exception\IllegalArgumentException;
use Hyperf\Utils\Context;

class InnerEnhancedServiceLoader
{
    public static function getServiceLoader($type): InnerEnhancedServiceLoader
    {
        if ($type == null) {
            throw new IllegalArgumentException('Enhanced Service type == null');
        }
        return Context::getOrSet(sprintf('InnerEnhancedServiceLoader:serviceLoader:%s', $type), $type);
    }

    public function loadAll()
    {
    }
}
