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
namespace Hyperf\Seata\SqlParser\Antlr\MySql\Stream;

use Antlr\Antlr4\Runtime\CharStream;
use Antlr\Antlr4\Runtime\Token;
use Antlr\Antlr4\Runtime\Utils\StringUtils;

class ANTLRNoCaseStringStream implements CharStream
{
    public string $name = '<empty>';

    public string $input;

    /** @var array<string> */
    public array $characters = [];

    protected int $index = 0;

    protected int $size = 0;

    /**
     * @param array<string> $characters
     */
    public function __construct(string $input, array $characters = [])
    {
        $this->input = $input;
        if (empty($characters)) {
            $characters = str_split($input);
        }
        $this->characters = $characters;
        $this->size = \count($this->characters);
    }

    public function __toString(): string
    {
        return $this->input;
    }

    public static function fromString(string $input): ANTLRNoCaseStringStream
    {
        $chars = \preg_split('//u', $input, -1, \PREG_SPLIT_NO_EMPTY);

        return new self($input, $chars === false ? [] : $chars);
    }

    public static function fromPath(string $path): ANTLRNoCaseStringStream
    {
        $content = \file_get_contents($path);

        if ($content === false) {
            throw new \InvalidArgumentException(\sprintf('File not found at %s.', $path));
        }

        return self::fromString($content);
    }

    public function getIndex(): int
    {
        return $this->index;
    }

    public function getLength(): int
    {
        return $this->size;
    }

    public function consume(): void
    {
        if ($this->index >= $this->size) {
            // assert this.LA(1) == Token.EOF
            throw new \RuntimeException('Cannot consume EOF.');
        }

        ++$this->index;
    }

    public function originLA(int $offset): int
    {
        if ($offset === 0) {
            return 0; // undefined
        }

        if ($offset < 0) {
            // e.g., translate LA(-1) to use offset=0
            ++$offset;
        }

        $pos = $this->index + $offset - 1;

        if ($pos < 0 || $pos >= $this->size) {
            // invalid
            return Token::EOF;
        }

        return StringUtils::codePoint($this->characters[$pos]);
    }

    public function LA(int $offset): int
    {
        $la = $this->originLA($offset);
        if ($la == 0 || $la == self::EOF) {
            return $la;
        }
        return strtoupper($la);
    }

    public function LT(int $offset): int
    {
        return $this->LA($offset);
    }

    /**
     * Mark/release do nothing; we have entire buffer.
     */
    public function mark(): int
    {
        return -1;
    }

    public function release(int $marker): void
    {
    }

    /**
     * {@see self::consume()} ahead until `$p === $this->index`; Can't just set
     * `$p = $this->index` as we must update line and column. If we seek
     * backwards, just set `$p`.
     */
    public function seek(int $index): void
    {
        if ($index <= $this->index) {
            $this->index = $index; // just jump; don't update stream state (line, ...)

            return;
        }

        // seek forward
        $this->index = \min($index, $this->size);
    }

    public function getText(int $start, int $stop): string
    {
        if ($stop >= $this->size) {
            $stop = $this->size - 1;
        }

        if ($start >= $this->size) {
            return '';
        }

        return \implode(\array_slice($this->characters, $start, $stop - $start + 1));
    }

    public function getSourceName(): string
    {
        return '';
    }
}
