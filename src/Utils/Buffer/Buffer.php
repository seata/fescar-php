<?php

namespace Hyperf\Seata\Utils\Buffer;


abstract class Buffer
{

    /**
     * @var int
     */
    protected $position = 0;

    /**
     * @var int
     */
    protected $limit;

    /**
     * @var int
     */
    protected $capacity;

    /**
     * @var int
     */
    protected $mark = -1;

    public function __construct(int $mark, int $position, int $limit, int $capacity)
    {
        if ($capacity < 0) {
            throw new \InvalidArgumentException('Capacity cannot be negative');
        }
        $this->position = $position;
        $this->limit = $limit;
        $this->capacity = $capacity;
        if ($mark >= 0) {
            if ($mark > $position) {
                throw new \InvalidArgumentException(sprintf('mark > position: (%d, %d)', $mark, $position));
            }
            $this->mark = $mark;
        }
    }

    public abstract function isReadOnly(): bool;
    public abstract function hasArray(): bool;
    public abstract function duplicate();

    public function getCapacity(): int
    {
        return $this->capacity;
    }

    /**
     * @return $this
     */
    public function setPosition(int $position)
    {
        if ($position > $this->limit || $position< 0) {
            throw new \InvalidArgumentException('Position cannot be negative and cannot less than limit');
        }
        $this->position = $position;
        if ($this->mark > $position) {
            $this->mark = -1;
        }
        return $this;
    }

    public function getPosition(): int
    {
        return $this->position;
    }

    public function current(): int
    {
        return $this->getPosition();
    }

    public function getLimit(): int
    {
        return $this->limit;
    }

    /**
     * @param int $length
     * @return $this
     */
    public function rewind(int $length)
    {
        $this->setPosition($this->getPosition() - $length);
        return $this;
    }

    /**
     * @return $this
     */
    public function skip(int $length)
    {
        $this->setPosition($this->getPosition() + $length);
        return $this;
    }

    /**
     * @return $this
     */
    public function setLimit(int $limit)
    {
        if ($limit > $this->capacity || $limit < 0) {
            throw new \InvalidArgumentException('Limit cannot be negative and cannot less than capacity');
        }
        $this->limit = $limit;
        if ($this->position > $limit) {
            $this->position = $limit;
        }
        if ($this->mark > $limit) {
            $this->mark = -1;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function mark()
    {
        $this->mark = $this->getPosition();
        return $this;
    }

    /**
     * @return $this
     */
    public function reset()
    {
        if ($this->mark < 0) {
            throw new \RuntimeException('Invalid mark value');
        }
        $this->position = $this->mark;
        return $this;
    }

    /**
     * @return $this
     */
    public function clear()
    {
        $this->position = 0;
        $this->limit = $this->capacity;
        $this->mark = -1;
        return $this;
    }

    /**
     * @return $this
     */
    public function flip()
    {
        $this->limit = $this->position;
        $this->position = 0;
        $this->mark = -1;
        return $this;
    }

    public function remaining(): int
    {
        return $this->limit - $this->position;
    }

    public function hasRemaining(): bool
    {
        return $this->position < $this->limit;
    }

    public function getMark(): int
    {
        return $this->mark;
    }

    /**
     * @return $this
     */
    public abstract function slice(int $position, int $limit);

    protected function checkBounds(int $offset, int $length, int $size)
    {
        if (($offset | $length | ($offset + $length) | ($size - ($offset + $length))) < 0 ) {
            throw new \RuntimeException('Index out of bound');
        }
    }

    protected function nextIndex(?int $nb = null): int
    {
        if ($nb === null && $this->position >= $this->limit) {
            throw new \RuntimeException('Buffer under flow');
        } elseif ($nb !== null && ($this->limit - $this->position) < $nb) {
            throw new \RuntimeException('Buffer under flow');
        }
        if ($nb === null) {
            $nb = 1;
        }
        $this->position += $nb;
        return $this->position;
    }

    protected function checkIndex(int $i): int
    {
        if (($i < 0) || ($i >= $this->limit)) {
            throw new \InvalidArgumentException('Index out of bound');
        }
        return $i;
    }
}