<?php

declare(strict_types=1);
/**
 * Copyright 2019-2022 Seata.io Group.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 */
namespace Hyperf\Seata\Utils\Buffer;

use InvalidArgumentException;
use Swoole\Coroutine\Socket;

abstract class ByteBuffer extends Buffer
{
    use Traits\Hex;
    use Traits\Integer;
    use Traits\UnsignedInteger;
    use Traits\Floats;
    use Traits\Strings;
    use Traits\Bytes;

    /**
     * Available formats and the bit size required to store them.
     *
     * @var array
     */
    public const LENGTHS
        = [
            // Chars (8 bit)
            'c' => 1,
            'C' => 1,
            // Signed Short (16 bit)
            's' => 2,
            // Unsigned Short (16 bit)
            'n' => 2,
            'S' => 2,
            'v' => 2,
            // Signed Long  (32 bit)
            'l' => 4,
            // Unsigned Long  (32 bit)
            'L' => 4,
            'N' => 4,
            'V' => 4,
            // Signed Long Long (64 bit)
            'q' => 8,
            // Unsigned Long Long (64 bit)
            'J' => 8,
            'P' => 8,
            'Q' => 8,
            // Float (32 bit)
            'G' => 4,
            'g' => 4,
            'f' => 4,
            // Float (64 bit)
            'E' => 8,
            'e' => 8,
            'd' => 8,
        ];

    /**
     * Most significant value in the sequence is stored first. Flip no bytes!
     */
    public const BYTE_ORDER_BE = 0;

    /**
     * Least significant value in the sequence is stored first. Flip bytes!
     */
    public const BYTE_ORDER_LE = 1;

    /**
     * Let the current machine determine the endianess.
     */
    public const BYTE_ORDER_MB = 2;

    public ?array $bytes = [];

    protected int $offset;

    protected bool $readOnly;

    /**
     * Whether to use big endian, little endian or machine byte order.
     */
    private int $order = self::BYTE_ORDER_BE;

    public function __construct(
        int $mark,
        int $position,
        int $limit,
        int $capacity,
        ?array $bytes = null,
        int $offset = 0
    ) {
        parent::__construct($mark, $position, $limit, $capacity);
        $this->bytes = $bytes;
        $this->offset = $offset;
    }

    abstract public function asReadOnlyBuffer(): ByteBuffer;

    abstract public function getCurrent();

    abstract public function get(int $index);

    abstract public function put($byte, ?int $index = null);

    public function hasArray(): bool
    {
        return ($this->bytes !== null) && ! $this->readOnly;
    }

    public static function allocate(int $capacity = 65535, ?int $limit = null): HeapByteBuffer
    {
        if ($limit === null) {
            $limit = $capacity;
        }
        $instance = new HeapByteBuffer(-1, 0, $limit, $capacity);
        $instance->bytes = [];
        return $instance;
    }

    public static function allocateSocket(Socket $socket): SwooleSocketByteBuffer
    {
        return new SwooleSocketByteBuffer($socket, -1, 0, 65535, 65535);
    }

    public static function wrap(array $bytes, int $offset = 0, ?int $length = null): HeapByteBuffer
    {
        try {
            if ($length === null) {
                $length = count($bytes);
            }
            return HeapByteBuffer::allocateFromBytes($bytes, $offset, $length);
        } catch (\Exception $exception) {
            throw new \InvalidArgumentException('Index out of bounds');
        }
    }

    public static function wrapString(string $data): HeapByteBuffer
    {
        $capacity = strlen($data);
        $buffer = new HeapByteBuffer(-1, 0, $capacity, $capacity);
        $buffer->putString($data);
        $buffer->clear();
        return $buffer;
    }

    public static function wrapBinary(string $binary): HeapByteBuffer
    {
        $capacity = strlen($binary);
        $buffer = new HeapByteBuffer(-1, 0, $capacity, $capacity);
        $binary && $buffer->put($binary);
        $buffer->clear();
        return $buffer;
    }

    public function merge(ByteBuffer $buffer): static
    {
        $bytes = $buffer->getBytes();
        if ($bytes) {
            $this->bytes = array_merge($this->bytes, $bytes);
        }
        return $this;
    }

    /**
     * Get the value for a given offset.
     */
    public function offsetGet(int $offset)
    {
        return $this->get($offset);
    }

    /**
     * Set the value at the given offset.
     * @param mixed $value
     */
    public function offsetSet(int $offset, $value): void
    {
        $this->put($value, $offset);
    }

    /**
     * Determine if the given offset exists.
     */
    public function offsetExists(int $offset): bool
    {
        return isset($this->bytes[$offset]);
    }

    /**
     * Unset the value at the given offset.
     */
    public function offsetUnset(int $offset): void
    {
        unset($this->bytes[$offset]);
    }

    /**
     * Fill NULL byte with length.
     */
    public function fill(int $length, ?int $start = null): static
    {
        if ($start !== null) {
            $this->setPosition($start);
        }

        for ($i = 0; $i < $length; ++$i) {
            $this->put(pack('x'));
        }

        return $this;
    }

    /**
     * Pack data into a binary string.
     * @param mixed $value
     */
    public function pack(string $format, $value, int $offset): static
    {
        $this->skip($offset);

        $byte = pack($format, $value);
        $this->put($byte);

        return $this;
    }

    /**
     * Unpack data from a binary string.
     */
    public function unpack(string $format, int $offset = 0): int|string
    {
        $this->skip($offset);

        $value = unpack($format, $this->toBinary(), $this->getPosition());
        if (is_array($value)) {
            $value = $value[1];
            $this->skip($this->getFormatLength($format));
            return $value;
        }
        return '';
    }

    public function binaryLength(): int
    {
        return strlen($this->toBinary());
    }

    /**
     * Get the buffer as a binary string.
     */
    public function toBinary(int $offset = 0, int $length = 0): string
    {
        return implode('', $this->toArray($offset, $length));
    }

    /**
     * Get the buffer as a hex string.
     */
    public function toHex(int $offset = 0, int $length = 0): string
    {
        return unpack('H*', $this->toBinary($offset, $length))[1];
    }

    /**
     * Get the buffer as a UTF-8 string.
     */
    public function toUTF8(int $offset = 0, int $length = 0): string
    {
        return mb_convert_encoding($this->toBinary($offset, $length), 'UTF-8', 'UTF-8');
    }

    /**
     * Get the buffer as a base64 string.
     */
    public function toBase64(int $offset = 0, int $length = 0): string
    {
        return base64_encode($this->toBinary($offset, $length));
    }

    /**
     * Get the buffer as an array.
     */
    public function toArray(int $offset = 0, int $length = 0): array
    {
        return $this->slice($offset, $length)->getBytes() ?? [];
    }

    public function getBytes(): ?array
    {
        return $this->bytes;
    }

    /**
     * Gets the length of the value stored in this ByteBuffer.
     */
    public function bufferSize(): int
    {
        return count($this->bytes);
    }

    /**
     * Determine if the byte order is set to big endian.
     */
    public function isBigEndian(): bool
    {
        return $this->order === self::BYTE_ORDER_BE;
    }

    /**
     * Determine if the byte order is set to little endian.
     */
    public function isLittleEndian(): bool
    {
        return $this->order === self::BYTE_ORDER_LE;
    }

    /**
     * Determine if the byte order is set to machine byte.
     */
    public function isMachineByte(): bool
    {
        return $this->order === self::BYTE_ORDER_MB;
    }

    protected function getFormatLength(string $format): int
    {
        if (in_array($format[0], ['a', 'd', 'f', 'Z'], true)) {
            return (int) substr($format, 1);
        }

        if (in_array($format[0], ['h', 'H'], true)) {
            return (int) substr($format, 1) / 2;
        }

        if (! array_key_exists($format, static::LENGTHS)) {
            throw new InvalidArgumentException("The given format [{$format}] is not supported.");
        }

        return static::LENGTHS[$format];
    }
}
