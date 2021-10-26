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

class PositiveCounter
{
    private const MASK = 0x7FFFFFFF;

    private static int $atom = 1;

    public static function incrementAndGet(): int
    {
        return ++self::$atom & self::MASK;
    }

    public static function getAndIncrement(): int
    {
        return self::$atom++ & self::MASK;
    }

    public function get(): int
    {
        return self::$atom & self::MASK;
    }
}
