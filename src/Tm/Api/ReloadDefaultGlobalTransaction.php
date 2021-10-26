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
namespace Hyperf\Seata\Tm\Api;

use Hyperf\Seata\Exception\IllegalStateException;

class ReloadDefaultGlobalTransaction extends DefaultGlobalTransaction
{
    public function begin(?int $timeout = null, ?string $name = null)
    {
        throw new IllegalStateException('Never BEGIN on a RELOADED GlobalTransaction. ');
    }
}
