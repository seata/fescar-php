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
namespace Hyperf\Seata\Utils\Buffer;

use BadMethodCallException;
use Hyperf\Seata\Exception\NotSupportYetException;
use Swoole\Coroutine\Socket;

class SwooleSocketByteBuffer extends ByteBuffer
{
    /**
     * @var Socket
     */
    protected $socket;

    public function __construct(
        Socket $socket,
        int $mark = -1,
        int $position = 0,
        int $limit = 65535,
        int $capacity = 65535,
        ?array $bytes = null,
        int $offset = 0
    ) {
        parent::__construct($mark, $position, $limit, $capacity, $bytes, $offset);
        $this->socket = $socket;
    }

    public function isReadOnly(): bool
    {
        return true;
    }

    public function duplicate()
    {
        return new self($this->socket, $this->getMark(), $this->getPosition(), $this->getLimit(), $this->getCapacity(), $this->bytes, $this->offset);
    }

    public function slice(int $position, int $limit)
    {
        throw new NotSupportYetException();
    }

    public function asReadOnlyBuffer()
    {
        throw new NotSupportYetException();
    }

    public function getCurrent()
    {
        $byte = $this->socket->recv(1);
        $this->bytes[$this->ix($this->nextIndex())] = $byte;
        return $byte;
    }

    public function get(int $index)
    {
        return $this->bytes[$this->ix($this->checkIndex($index))] ?? null;
    }

    public function put($byte, ?int $index = null)
    {
        $this->bytes[$this->ix($this->nextIndex())] = $byte;
    }

    public function pack(string $format, $value, int $offset): ByteBuffer
    {
        throw new BadMethodCallException('It is a reayonly byte buffer object');
    }

    public function unpack(string $format, int $offset = 0)
    {
        $data = $this->recv($this->getFormatLength($format));
        if ($data) {
            return unpack($format, $data)[1];
        }
        return null;
    }

    protected function ix(int $i): int
    {
        return $i + $this->offset;
    }

    protected function recv(int $length)
    {
        $data = $this->socket->recv($length);
        for ($i = 0; $i < strlen($data); ++$i) {
            $this->put($data[$i]);
        }
        return $data;
    }
}
