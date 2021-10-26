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
namespace Hyperf\Seata\Utils\Buffer\Traits;

trait Hex
{
    public function readHex(int $length): string
    {
        return $this->unpack("H{$length}");
    }

    public function readHexString(int $length): string
    {
        return pack('H*', $this->readHex($length));
    }

    public function putHex(int $value, int $offset = 0)
    {
        return $this->pack('C', intval($value) & 0xFF, $offset);
    }
}
