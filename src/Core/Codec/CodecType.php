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

class CodecType
{
    /**
     * The seata.
     * <p>
     * Math.pow(2, 0).
     */
    public const SEATA = 0x1;

    /**
     * The protobuf.
     * <p>
     * Math.pow(2, 1).
     */
    public const PROTOBUF = 0x2;
}
