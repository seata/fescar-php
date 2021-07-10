<?php

namespace Hyperf\Seata\Utils\Buffer\Traits;


trait Bytes
{

    /**
     * @return $this
     */
    public function putBytes(array $bytes, int $offset = 0)
    {
        $this->skip($offset);
        foreach ($bytes as $byte) {
            $this->put($byte);
        }
        return $this;
    }

}