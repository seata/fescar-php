<?php


namespace Hyperf\Seata\Utils\Buffer\Traits;


trait Floats
{

    public function readFloat32(int $offset = 0): float
    {
        return $this->unpack(['G', 'g', 'f'][$this->order], $offset);
    }

    public function readFloat64(int $offset = 0): float
    {
        return $this->unpack(['E', 'e', 'd'][$this->order], $offset);
    }

    public function readDouble(int $offset = 0): float
    {
        return $this->readFloat64($offset);
    }

    public function putFloat32(float $value, int $offset = 0): self
    {
        return $this->pack(['G', 'g', 'f'][$this->order], $value, $offset);
    }

    public function putFloat64(float $value, int $offset = 0): self
    {
        return $this->pack(['E', 'e', 'd'][$this->order], $value, $offset);
    }

    public function putDouble(float $value, int $offset = 0): self
    {
        return $this->putFloat64($value, $offset);
    }

}