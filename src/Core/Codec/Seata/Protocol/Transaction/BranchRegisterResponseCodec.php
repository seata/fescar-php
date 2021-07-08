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
use Hyperf\Seata\Core\Protocol\Transaction\BranchRegisterResponse;
use Hyperf\Utils\Buffer\ByteBuffer;

class BranchRegisterResponseCodec extends AbstractTransactionResponseCodec
{
    public function getMessageClassType(): string
    {
        return BranchRegisterResponse::class;
    }

    public function encode(AbstractMessage $message, ByteBuffer $buffer): ByteBuffer
    {
        parent::encode($message, $buffer);

        if (! $message instanceof BranchRegisterResponse) {
            throw new \InvalidArgumentException('Invalid message');
        }

        $buffer->putULong($message->getBranchId());
    }

    public function decode(AbstractMessage $message, ByteBuffer $buffer): AbstractMessage
    {
        parent::decode($message, $buffer);

        if (! $message instanceof BranchRegisterResponse) {
            throw new \InvalidArgumentException('Invalid message');
        }

        $message->setBranchId($buffer->readULong());
    }
}
