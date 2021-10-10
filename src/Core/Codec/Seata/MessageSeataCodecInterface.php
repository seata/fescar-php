<?php


namespace Hyperf\Seata\Core\Codec\Seata;


use Hyperf\Seata\Core\Protocol\AbstractMessage;
use Hyperf\Seata\Utils\Buffer\ByteBuffer;

interface MessageSeataCodecInterface
{

    /**
     * Gets message type.
     *
     * @return the message type
     */
    public function getMessageClassType(): string;

    public function encode(AbstractMessage $message, ByteBuffer $buffer): ByteBuffer ;

    public function decode(AbstractMessage $message, ByteBuffer $buffer): AbstractMessage;

}