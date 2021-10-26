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
