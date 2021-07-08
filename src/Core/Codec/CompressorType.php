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
namespace Hyperf\Seata\Core\Codec;

class CompressorType
{
    /**
     * Not compress.
     */
    public const NONE = 0x0;

    /**
     * The gzip.
     */
    public const GZIP = 0x1;
}
