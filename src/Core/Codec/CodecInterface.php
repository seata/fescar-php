<?php

namespace Hyperf\Seata\Core\Codec;


use Hyperf\Seata\Core\Protocol\AbstractMessage;
use Hyperf\Utils\Buffer\ByteBuffer;

interface CodecInterface
{

    public function encode(AbstractMessage $message, ByteBuffer $buffer): ByteBuffer;

    public function decode(string $content);

}