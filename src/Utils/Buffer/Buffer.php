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

abstract class Buffer
{
    protected int $position = 0;

    protected int $limit;

    protected int $capacity;

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

    abstract public function isReadOnly(): bool;

    abstract public function hasArray(): bool;

    abstract public function duplicate();

    public function getCapacity(): int
    {
        return $this->capacity;
    }

    /**
     * @return $this
     */
    public function setPosition(int $position): static
    {
        if ($position > $this->limit || $position < 0) {
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
     * @return $this
     */
    public function rewind(int $length): static
    {
        $this->setPosition($this->getPosition() - $length);
        return $this;
    }

    /**
     * @return $this
     */
    public function skip(int $length): static
    {
        $this->setPosition($this->getPosition() + $length);
        return $this;
    }

    /**
     * @return $this
     */
    public function setLimit(int $limit): static
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
    public function mark(): static
    {
        $this->mark = $this->getPosition();
        return $this;
    }

    /**
     * @return $this
     */
    public function reset(): static
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
    public function clear(): static
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
    abstract public function slice(int $position, int $limit);

    protected function checkBounds(int $offset, int $length, int $size): void
    {
        if (($offset | $length | ($offset + $length) | ($size - ($offset + $length))) < 0) {
            throw new \RuntimeException('Index out of bound');
        }
    }

    protected function nextIndex(?int $nb = null): int
    {
        if ($nb === null && $this->position >= $this->limit) {
            throw new \RuntimeException('Buffer under flow');
        }
        if ($nb !== null && ($this->limit - $this->position) < $nb) {
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
