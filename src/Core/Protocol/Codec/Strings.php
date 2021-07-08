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
namespace Hyperf\Seata\Core\Protocol\Codec;

class Strings
{
    /**
     * @var
     */
    protected $string;

    /**
     * @var int
     */
    protected $length;

    /**
     * @var array
     */
    protected $bytes = [];

    public function __construct(string $string)
    {
        $this->string = $string;
    }

    public function __toString()
    {
        return $this->getValue();
    }

    public function getValue(): string
    {
        return $this->string;
    }

    public function getBytes(): array
    {
        $n = 0;
        while ($n < $this->length()) {
            $character = $this->string[$n];
            $this->bytes[] = ord($character);
            ++$n;
        }
        return $this->bytes;
    }

    public function convertTo(int $to): array
    {
        $data = [];
        foreach ($this->getBytes() as $byte) {
            $data[] = base_convert($byte, 10, $to);
        }
        return $data;
    }

    public function convertToBin(?int $fixed = null)
    {
        $data = $this->convertTo(2);
        if ($fixed !== null) {
            foreach ($data as &$item) {
                $itemLength = strlen($item);
                if ($fixed < $itemLength) {
                    throw new \RuntimeException('The fixed length less then original bin length');
                }
                if (($fixed - $itemLength) > 0) {
                    $item = str_repeat('0', $fixed - $itemLength) . $item;
                }
            }
        }
        return $data;
    }

    public function length(): int
    {
        if ($this->length === null) {
            $this->length = strlen($this->string);
        }
        return $this->length;
    }

    public function isEmpty(): bool
    {
        return $this->length() === 0;
    }

    public function lowerString(): string
    {
        return strtolower($this->string);
    }

    public function upperString(): string
    {
        return strtoupper($this->string);
    }

    public function lower(): string
    {
        $this->string = $this->lowerString();
        return $this->string;
    }

    public function upper(): string
    {
        $this->string = $this->upperString();
        return $this->string;
    }

    public function equalsIgnoreCase(string $string): bool
    {
        return $this->lowerString() === strtolower($string);
    }

    public function substring(int $start, ?int $length = null): Strings
    {
        $string = substr($this->string, $start, $length);
        return new self($string);
    }
}
