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
use Hyperf\Seata\Core\Protocol\Transaction\AbstractGlobalEndRequest;
use Hyperf\Utils\Buffer\ByteBuffer;

abstract class AbstractGlobalEndRequestCodec extends AbstractTransactionRequestToTCCodec
{
    public function getMessageClassType(): string
    {
        return AbstractGlobalEndRequest::class;
    }

    public function encode(AbstractMessage $message, ByteBuffer $buffer): ByteBuffer
    {
        if (! $message instanceof AbstractGlobalEndRequest) {
            throw new \InvalidArgumentException('Invalid message');
        }
        $this->putProperty($buffer, $message->getXid());
        $this->putProperty($buffer, $message->getExtraData());
    }

    public function decode(AbstractMessage $message, ByteBuffer $buffer): AbstractMessage
    {
        if (! $message instanceof AbstractGlobalEndRequest) {
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
