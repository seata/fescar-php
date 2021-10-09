<?php

namespace Hyperf\Seata\Core\Codec\Seata\Protocol\Transaction;


use Hyperf\Seata\Core\Protocol\AbstractMessage;
use Hyperf\Seata\Core\Protocol\Transaction\GlobalBeginResponse;
use Hyperf\Utils\Buffer\ByteBuffer;

class GlobalBeginResponseCodec extends AbstractTransactionResponseCodec
{
    public function getMessageClassType(): string
    {
        return GlobalBeginResponse::class;
    }

    public function encode(AbstractMessage $message, ByteBuffer $buffer): ByteBuffer
    {
        parent::encode($message, $buffer);

        if (! $message instanceof GlobalBeginResponse) {
            throw new \InvalidArgumentException('Invalid message');
        }

        $this->putProperty($buffer, $message->getXid());
        $this->putProperty($buffer, $message->getExtraData());

    }

    public function decode(AbstractMessage $message, ByteBuffer $buffer): AbstractMessage
    {
        parent::decode($message, $buffer);

        if (! $message instanceof GlobalBeginResponse) {
            throw new \InvalidArgumentException('Invalid message');
        }

        $length = $buffer->readUShort();
        if ($length > 0) {
            $message->setXid($buffer->readString($length));
        }

        $length = $buffer->readUShort();
        if ($length > 0) {
            $message->setExtraData($buffer->readString($length));
        }
    }


}