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

use Hyperf\Seata\Core\Protocol\AbstractIdentifyResponse;
use Hyperf\Seata\Core\Protocol\AbstractMessage;
use Hyperf\Seata\Core\Protocol\Codec\Strings;
use Hyperf\Utils\Buffer\ByteBuffer;

abstract class AbstractIdentifyResponseCodec extends AbstractResultMessageCodec
{
    public function getMessageClassType(): string
    {
        return AbstractIdentifyResponse::class;
    }

    public function encode(AbstractMessage $message, ByteBuffer $buffer): ByteBuffer
    {
        if (! $message instanceof AbstractIdentifyResponse) {
            throw new \InvalidArgumentException('Invalid message');
        }
        $identified = $message->isIdentified();
        $version = $message->getVersion();
        $buffer->putUByte($identified ? 1 : 0);
        if ($version) {
            $version = new Strings($version);
            $bytes = $version->getBytes();
            $count = count($bytes);
            $buffer->putUShort($count);
            if ($count > 0) {
                foreach ($bytes as $byte) {
                    $buffer->putUInt8($byte);
                }
            }
        } else {
            $buffer->putUShort(0);
        }
    }

    public function decode(AbstractMessage $message, ByteBuffer $buffer): AbstractMessage
    {
        if (! $message instanceof AbstractIdentifyResponse) {
            throw new \InvalidArgumentException('Invalid message');
        }
        $message->setIdentified($buffer->readUByte() == 1);
        $length = $buffer->readUShort();
        if ($length <= 0) {
            return $message;
        }
        if ($buffer->remaining() < $length) {
            return $message;
        }
        $data = $buffer->readString($length);
        $message->setVersion($data);
        return $message;
    }
}
