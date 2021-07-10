<?php

namespace Hyperf\Seata\Utils\Buffer\Traits;


trait Integer
{

    public function putByte(int $value, int $offset = 0)
    {
        return $this->putInt8($value, $offset);
    }

    public function putInt8(int $value, int $offset = 0)
    {
        return $this->pack('c', $value, $offset);
    }

    public function putInt16(int $value, int $offset = 0)
    {
        return $this->pack('s', $value, $offset);
    }

    public function putInt32(int $value, int $offset = 0)
    {
        return $this->pack('l', $value, $offset);
    }

    public function putInt64(int $value, int $offset = 0)
    {
        return $this->pack('q', $value, $offset);
    }

    public function putShort(int $value, int $offset = 0)
    {
        return $this->putUInt16($value, $offset);
    }

    public function putInt(int $value, int $offset = 0)
    {
        return $this->putInt32($value, $offset);
    }

    public function putLong(int $value, int $offset = 0)
    {
        return $this->putInt64($value, $offset);
    }

    public function readByte(int $offset = 0): int
    {
        return $this->readInt8($offset);
    }

    public function readInt8(int $offset = 0): int
    {
        return $this->unpack('c', $offset);
    }

    public function readInt16(int $offset = 0): int
    {
        return $this->unpack('s', $offset);
    }

    public function readInt32(int $offset = 0): int
    {
        return $this->unpack('l', $offset);
    }

    public function readInt64(int $offset = 0): int
    {
        return $this->unpack('q', $offset);
    }

    public function readShort(int $offset = 0): int
    {
        return $this->readInt16($offset);
    }

    public function readInt(int $offset = 0): int
    {
        return $this->readInt32($offset);
    }

    public function readLong(int $offset = 0): int
    {
        return $this->readInt64($offset);
    }
}