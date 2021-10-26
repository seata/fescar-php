<?php

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