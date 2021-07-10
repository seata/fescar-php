<?php

namespace Hyperf\Seata\Utils\Buffer;


use Hyperf\Seata\Utils\Buffer\Traits;
use InvalidArgumentException;
use Swoole\Coroutine\Socket;

abstract class ByteBuffer extends Buffer
{

    use Traits\Hex, Traits\Integer, Traits\UnsignedInteger, Traits\Floats, Traits\Strings, Traits\Bytes;

    /**
     * @var array|null
     */
    protected $bytes = null;

    /**
     * @var int
     */
    protected $offset;

    /**
     * @var bool
     */
    protected $readOnly;

    /**
     * Available formats and the bit size required to store them.
     *
     * @var array
     */
    const LENGTHS
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
     * Whether to use big endian, little endian or machine byte order.
     *
     * @var int
     */
    private $order = self::BYTE_ORDER_BE;

    /**
     * Most significant value in the sequence is stored first. Flip no bytes!
     */
    const BYTE_ORDER_BE = 0;

    /**
     * Least significant value in the sequence is stored first. Flip bytes!
     */
    const BYTE_ORDER_LE = 1;

    /**
     * Let the current machine determine the endianess.
     */
    const BYTE_ORDER_MB = 2;

    public function __construct(
        int $mark,
        int $position,
        int $limit,
        int $capacity,
        ?array $bytes = null,
        int $offset = 0
    ) {
        parent::__construct($mark, $position, $limit, $capacity);
        $bytes && $this->bytes = $bytes;
        $this->offset = $offset;
    }

    /**
     * @return ByteBuffer
     */
    public abstract function asReadOnlyBuffer();

    public abstract function getCurrent();

    public abstract function get(int $index);

    public abstract function put($byte, ?int $index = null);

    public function hasArray(): bool
    {
        return ($this->bytes !== null) && ! $this->readOnly;
    }

    public static function allocate(int $capacity = 65535, ?int $limit = null): HeapByteBuffer
    {
        if ($limit === null) {
            $limit = $capacity;
        }
        return new HeapByteBuffer(-1, 0, $limit, $capacity);
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
            return new HeapByteBuffer($bytes, $offset, $length);
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

    /**
     * @return $this
     */
    public function merge(ByteBuffer $buffer)
    {
        $bytes = $buffer->getBytes();
        $this->bytes = array_merge($this->bytes, $bytes);
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
     * Fill NUL byte with length.
     *
     * @return $this
     */
    public function fill(int $length, ?int $start = null)
    {
        if ($start !== null) {
            $this->setPosition($start);
        }

        for ($i = 0; $i < $length; $i++) {
            $this->put(pack('x'));
        }

        return $this;
    }

    /**
     * Pack data into a binary string.
     *
     * @return $this
     */
    public function pack(string $format, $value, int $offset): self
    {
        $this->skip($offset);

        $byte = pack($format, $value);
        $this->put($byte);

        return $this;
    }

    /**
     * Unpack data from a binary string.
     *
     * @return string|int
     */
    public function unpack(string $format, int $offset = 0)
    {
        $this->skip($offset);

        $value = unpack($format, $this->toBinary(), $this->getPosition())[1];

        $this->skip($this->getFormatLength($format));

        return $value;
    }

    protected function getFormatLength(string $format): int
    {
        if (in_array($format[0], ['a', 'd', 'f', 'Z'], true)) {
            return (int)substr($format, 1);
        }

        if (in_array($format[0], ['h', 'H'], true)) {
            return (int)substr($format, 1) / 2;
        }

        if (! array_key_exists($format, static::LENGTHS)) {
            throw new InvalidArgumentException("The given format [{$format}] is not supported.");
        }

        return static::LENGTHS[$format];
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
        return self::BYTE_ORDER_BE === $this->order;
    }

    /**
     * Determine if the byte order is set to little endian.
     */
    public function isLittleEndian(): bool
    {
        return self::BYTE_ORDER_LE === $this->order;
    }

    /**
     * Determine if the byte order is set to machine byte.
     */
    public function isMachineByte(): bool
    {
        return self::BYTE_ORDER_MB === $this->order;
    }

}