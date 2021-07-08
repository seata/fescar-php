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
use Hyperf\Seata\Core\Protocol\Transaction\GlobalBeginRequest;
use Hyperf\Utils\Buffer\ByteBuffer;

class GlobalBeginRequestCodec extends AbstractTransactionRequestToTCCodec
{
    public function getMessageClassType(): string
    {
        return GlobalBeginRequest::class;
    }

    public function encode(AbstractMessage $message, ByteBuffer $buffer): ByteBuffer
    {
        if (! $message instanceof GlobalBeginRequest) {
            throw new \InvalidArgumentException('Invalid message');
        }

        $buffer->putUInt($message->getTimeout());
        $this->putProperty($buffer, $message->getTransactionName());
    }

    public function decode(AbstractMessage $message, ByteBuffer $buffer): AbstractMessage
    {
        if (! $message instanceof GlobalBeginRequest) {
            throw new \InvalidArgumentException('Invalid message');
        }

        $message->setTimeout($buffer->readUInt());
        $length = $buffer->readUShort();
        if ($length > 0) {
            $message->setTransactionName($buffer->readString($length));
        }
    }
}
