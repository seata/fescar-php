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

use Hyperf\Seata\Core\Protocol\AbstractMessage;
use Hyperf\Utils\Buffer\ByteBuffer;

interface CodecInterface
{
    public function encode(AbstractMessage $message, ByteBuffer $buffer): ByteBuffer;

    public function decode(string $content);
}
