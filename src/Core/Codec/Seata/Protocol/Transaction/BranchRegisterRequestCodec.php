<?php

namespace Hyperf\Seata\Core\Codec\Seata\Protocol\Transaction;


use Hyperf\Seata\Core\Protocol\AbstractMessage;
use Hyperf\Seata\Core\Protocol\Transaction\BranchRegisterRequest;
use Hyperf\Utils\Buffer\ByteBuffer;

class BranchRegisterRequestCodec extends AbstractTransactionRequestToTCCodec
{
    public function getMessageClassType(): string
    {
        return BranchRegisterRequest::class;
    }


    public function encode(AbstractMessage $message, ByteBuffer $buffer): ByteBuffer
    {
        if (! $message instanceof BranchRegisterRequest) {
            throw new \InvalidArgumentException('Invalid message');
        }
        // Xid
        $this->putProperty($buffer, $message->getXid());
        // Branch Type
        $buffer->putUByte($message->getBranchType());
        // Resource Id
        $this->putProperty($buffer, $message->getResourceId());
        // Lock Key
        $this->putProperty($buffer, $message->getLockKey(), 32);
        // Application Data
        $this->putProperty($buffer, $message->getApplicationData(), 32);
    }

    public function decode(AbstractMessage $message, ByteBuffer $buffer): AbstractMessage
    {
        if (! $message instanceof BranchRegisterRequest) {
            throw new \InvalidArgumentException('Invalid message');
        }

        // Xid
        $length = $buffer->readUShort();
        if ($length > 0) {
            $message->setXid($buffer->readString($length));
        }

        // Branch Type
        $message->setBranchType($buffer->readUByte());

        // Resource Id
        $length = $buffer->readUShort();
        if ($length > 0) {
            $message->setResourceId($buffer->readString($length));
        }

        // Lock Key
        $length = $buffer->readUInt();
        if ($length > 0) {
            $message->setLockKey($buffer->readString($length));
        }

        // Application Data
        $length = $buffer->readUInt();
        if ($length > 0) {
            $message->setApplicationData($buffer->readString($length));
        }

    }
}