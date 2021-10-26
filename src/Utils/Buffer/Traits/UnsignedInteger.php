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

trait UnsignedInteger
{
    public function readUInt8(int $offset = 0): ?int
    {
        return $this->unpack('C', $offset);
    }

    public function readUInt16(int $offset = 0): int
    {
        return $this->unpack(['n', 'v', 'S'][$this->order], $offset);
    }

    public function readUInt32(int $offset = 0): int
    {
        return $this->unpack(['N', 'V', 'L'][$this->order], $offset);
    }

    public function readUInt64(int $offset = 0): int
    {
        return $this->unpack(['J', 'P', 'Q'][$this->order], $offset);
    }

    public function readUByte(int $offset = 0): ?int
    {
        return $this->readUInt8($offset);
    }

    public function readUShort(int $offset = 0): int
    {
        return $this->readUInt16($offset);
    }

    public function readUInt(int $offset = 0): int
    {
        return $this->readUInt32($offset);
    }

    public function readULong(int $offset = 0): int
    {
        return $this->readUInt64($offset);
    }

    public function putUInt8(int $value, int $offset = 0): self
    {
        return $this->pack('C', $value, $offset);
    }

    public function putUInt16(int $value, int $offset = 0): self
    {
        return $this->pack(['n', 'v', 'S'][$this->order], $value, $offset);
    }

    public function putUInt32(int $value, int $offset = 0): self
    {
        return $this->pack(['N', 'V', 'L'][$this->order], $value, $offset);
    }

    public function putUInt64(int $value, int $offset = 0): self
    {
        return $this->pack(['J', 'P', 'Q'][$this->order], $value, $offset);
    }

    public function putUByte(int $value, int $offset = 0): self
    {
        return $this->putUInt8($value, $offset);
    }

    public function putUShort(int $value, int $offset = 0): self
    {
        return $this->putUInt16($value, $offset);
    }

    public function putUInt(int $value, int $offset = 0): self
    {
        return $this->putUInt32($value, $offset);
    }

    public function putULong(int $value, int $offset = 0): self
    {
        return $this->putUInt64($value, $offset);
    }
}
