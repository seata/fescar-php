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
namespace Hyperf\Seata\Core\Codec\Seata\Protocol\Transaction;

use Hyperf\Seata\Core\Protocol\AbstractMessage;
use Hyperf\Seata\Core\Protocol\Transaction\AbstractBranchEndResponse;
use Hyperf\Utils\Buffer\ByteBuffer;

abstract class AbstractBranchEndResponseCodec extends AbstractTransactionResponseCodec
{
    public function getMessageClassType(): string
    {
        return AbstractBranchEndResponse::class;
    }

    public function encode(AbstractMessage $message, ByteBuffer $buffer): ByteBuffer
    {
        parent::encode($message, $buffer);

        if (! $message instanceof AbstractBranchEndResponse) {
            throw new \InvalidArgumentException('Invalid message');
        }

        if ($message->getXid() !== null) {
            $this->putProperty($buffer, $message->getXid());
        }
        $buffer->putULong($message->getBranchId());
        $buffer->putUByte($message->getBranchStatus());
    }

    public function decode(AbstractMessage $message, ByteBuffer $buffer): AbstractMessage
    {
        parent::decode($message, $buffer);

        if (! $message instanceof AbstractBranchEndResponse) {
            throw new \InvalidArgumentException('Invalid message');
        }

        $xidLength = $buffer->readUShort();
        if ($xidLength > 0) {
            $message->setXid($buffer->readString($xidLength));
        }
        $message->setBranchId($buffer->readULong());
        $message->setBranchStatus($buffer->readUByte());
    }
}
