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

trait Strings
{
    /**
     * Reads an UTF8 encoded string.
     */
    public function readString(int $length, int $offset = 0): string
    {
        return $this->readUTF8String($length, $offset);
    }

    /**
     * Reads an UTF8 encoded string.
     */
    public function readUTF8String(int $length, int $offset = 0): string
    {
        return utf8_decode($this->unpack("a{$length}", $offset));
    }

    /**
     * Reads a NULL-terminated UTF8 encoded string.
     */
    public function readCString(int $length, int $offset = 0): string
    {
        return utf8_decode($this->unpack("Z{$length}", $offset));
    }

    /**
     * Reads a length as uint32 prefixed UTF8 encoded string.
     */
    public function readIString(int $length, int $offset = 0): string
    {
        return $this->readString($length, 4 + $offset);
    }

    /**
     * Reads a length as varint32 prefixed UTF8 encoded string.
     */
    public function readVString(int $length, int $offset = 0): string
    {
        return $this->readString($length, 1 + $offset);
    }

    /**
     * Writes an UTF8 encoded string.
     */
    public function putString(string $value, int $offset = 0): self
    {
        return $this->putUTF8String($value, $offset);
    }

    /**
     * Writes an UTF8 encoded string.
     */
    public function putUTF8String(string $value, int $offset = 0): self
    {
        $value = utf8_encode($value);
        $length = strlen($value);

        return $this->pack("a{$length}", $value, $offset);
    }

    /**
     * Writes a NULL-terminated UTF8 encoded string.
     */
    public function putCString(string $value, int $offset = 0): self
    {
        $value = utf8_encode($value . ' ');
        $length = strlen($value);

        return $this->pack("Z{$length}", $value, $offset);
    }

    /**
     * Writes a length as uint32 prefixed UTF8 encoded string.
     */
    public function putIString(string $value, int $offset = 0): self
    {
        $this->fill(3);
        $this->pack('C', strlen($value), 0);

        return $this->putUTF8String($value, $offset);
    }

    /**
     * Writes a length as varint32 prefixed UTF8 encoded string.
     */
    public function putVString(string $value, int $offset = 0): self
    {
        $this->pack('C', strlen($value), 0);

        return $this->putUTF8String($value, $offset);
    }
}
