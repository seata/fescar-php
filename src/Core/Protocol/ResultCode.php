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
namespace Hyperf\Seata\Core\Protocol;

use Hyperf\Seata\Exception\IllegalArgumentException;

class ResultCode
{
    /**
     * Failed result code.
     */
    // Failed
    public const Failed = 0;

    /**
     * Success result code.
     */
    // Success
    public const Success = 1;

    public static function get(int $ordinal)
    {
        if (in_array($ordinal, [self::Success, self::Failed])) {
            return $ordinal;
        }
        throw new IllegalArgumentException('Unknown ResultCode[' . $ordinal . ']');
    }
}
