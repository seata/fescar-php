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
use Hyperf\Seata\Core\Protocol\Transaction\AbstractGlobalEndResponse;
use Hyperf\Seata\Utils\Buffer\ByteBuffer;

class AbstractGlobalEndResponseCodec extends AbstractTransactionResponseCodec
{
    public function getMessageClassType(): string
    {
        return AbstractGlobalEndResponse::class;
    }

    public function encode(AbstractMessage $message, ByteBuffer $buffer): ByteBuffer
    {
        parent::encode($message, $buffer);

        if (! $message instanceof AbstractGlobalEndResponse) {
            throw new \InvalidArgumentException('Invalid message');
        }

        $buffer->putUByte($message->getGlobalStatus());
    }

    public function decode(AbstractMessage $message, ByteBuffer $buffer): AbstractMessage
    {
        parent::decode($message, $buffer);

        if (! $message instanceof AbstractGlobalEndResponse) {
            throw new \InvalidArgumentException('Invalid message');
        }

        $message->setGlobalStatus((int) $buffer->readUByte());
    }
}
