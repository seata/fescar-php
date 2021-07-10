<?php

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

    public function putHex(string $value, int $offset = 0)
    {
        return $this->pack("C", intval($value) & 0xff, $offset);
    }

}