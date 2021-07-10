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
namespace Hyperf\Seata\Core\Codec\Seata\Protocol;

use Hyperf\Seata\Core\Protocol\AbstractMessage;
use Hyperf\Seata\Core\Protocol\Codec\Strings;
use Hyperf\Seata\Core\Protocol\RegisterRMRequest;
use Hyperf\Seata\Utils\Buffer\ByteBuffer;

class RegisterRMRequestCodec extends AbstractIdentifyRequestCodec
{
    public function getMessageClassType(): string
    {
        return RegisterRMRequest::class;
    }

    public function encode(AbstractMessage $message, ByteBuffer $buffer): ByteBuffer
    {
        $buffer = parent::encode($message, $buffer);
        if (! $message instanceof RegisterRMRequest) {
            throw new \InvalidArgumentException('Invalid message');
        }
        $resourceIds = $message->getResourceIds();
        if ($resourceIds !== null) {
            $string = new Strings($resourceIds);
            $bytes = $string->getBytes();
            $buffer->putUInt32(count($bytes));
            if ($string->length() > 0) {
                foreach ($bytes as $byte) {
                    $buffer->putUInt8($byte);
                }
            }
        } else {
            $buffer->putUInt32(0);
        }
        return $buffer;
    }

    public function decode(AbstractMessage $message, ByteBuffer $buffer): AbstractMessage
    {
        if (! $message instanceof RegisterRMRequest) {
            throw new \InvalidArgumentException('Invalid message');
        }
        if ($buffer->remaining() < 2) {
            return $message;
        }

        // Version
        $length = $buffer->readUShort();
        if ($length > 0) {
            if ($buffer->remaining() < $length) {
                return $message;
            }
            $message->setVersion($buffer->readString($length));
        } else {
            return $message;
        }

        if ($buffer->remaining() < 2) {
            return $message;
        }

        // ApplicationId
        $length = $buffer->readUShort();
        if ($length > 0) {
            if ($buffer->remaining() < $length) {
                return $message;
            }
            $message->setApplicationId($buffer->readString($length));
        }

        if ($buffer->remaining() < 2) {
            return $message;
        }

        // TransactionServiceGroup
        $length = $buffer->readUShort();
        if ($length > 0) {
            if ($buffer->remaining() < $length) {
                return $message;
            }
            $message->setTransactionServiceGroup($buffer->readString($length));
        }

        if ($buffer->remaining() < 2) {
            return $message;
        }

        // ExtraData
        $length = $buffer->readUShort();
        if ($length > 0) {
            if ($buffer->remaining() < $length) {
                return $message;
            }
            $message->setExtraData($buffer->readString($length));
        }

        if ($buffer->remaining() < 4) {
            return $message;
        }

        // ExtraData
        $length = $buffer->readUInt();
        if ($length > 0) {
            if ($buffer->remaining() < $length) {
                return $message;
            }
            $message->setResourceIds($buffer->readString($length));
        }
    }
}
