<?php

declare(strict_types=1);
/**
 * Copyright 1999-2022 Seata.io Group.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 */
namespace Hyperf\Seata\Core\Codec\Seata\Protocol;

use Hyperf\Seata\Core\Protocol\AbstractIdentifyResponse;
use Hyperf\Seata\Core\Protocol\AbstractMessage;
use Hyperf\Seata\Core\Protocol\Codec\Strings;
use Hyperf\Seata\Utils\Buffer\ByteBuffer;

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
