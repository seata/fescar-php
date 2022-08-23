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

class HeapByteBuffer extends ByteBuffer
{
    public static function allocateFromBytes(array $bytes, int $offset, int $length)
    {
        return new self(-1, $offset, $offset + $length, count($bytes), $bytes, 0);
    }

    public function isReadOnly(): bool
    {
        return false;
    }

    /**
     * @return HeapByteBuffer
     */
    public function duplicate()
    {
        return new self($this->getMark(), $this->getPosition(), $this->getLimit(), $this->getCapacity(), $this->bytes, $this->offset);
    }

    public function slice(?int $position = null, ?int $limit = null)
    {
        if ($position === null && $limit === null) {
            $position = $this->getPosition();
            $limit = $this->remaining();
            $remaining = $this->remaining();
        } elseif ($position !== null && $limit !== null) {
            $remaining = $limit - $position;
        } else {
            throw new \InvalidArgumentException();
        }
        if ($position < 0 || $position > $limit) {
            throw new \InvalidArgumentException();
        }
        return new self(-1, 0, $remaining, $remaining, $this->bytes, $position + $this->offset);
    }

    public function asReadOnlyBuffer(): ByteBuffer
    {
        throw new \RuntimeException('Not implement yet');
    }

    public function getCurrent()
    {
        return $this->bytes[$this->ix($this->nextIndex())] ?? null;
    }

    public function get(int $index)
    {
        return $this->bytes[$this->ix($this->checkIndex($index))] ?? null;
    }

    public function put($byte, ?int $index = null)
    {
        $this->bytes[$this->ix($this->nextIndex())] = $byte;
    }

    protected function ix(int $i): int
    {
        return $i + $this->offset;
    }
}
