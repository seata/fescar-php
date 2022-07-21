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

use Hyperf\Seata\Core\Protocol\AbstractIdentifyRequest;
use Hyperf\Seata\Core\Protocol\AbstractMessage;
use Hyperf\Seata\Core\Protocol\Codec\Strings;
use Hyperf\Seata\Utils\Buffer\ByteBuffer;

abstract class AbstractIdentifyRequestCodec extends AbstractMessageCodec
{
    public function getMessageClassType(): string
    {
        return AbstractIdentifyRequest::class;
    }

    public function encode(AbstractMessage $message, ByteBuffer $buffer): ByteBuffer
    {
        if (! $message instanceof AbstractIdentifyRequest) {
            throw new \InvalidArgumentException('Invalid message');
        }

        $version = $message->getVersion();
        $applicationId = $message->getApplicationId();
        $transactionServiceGroup = $message->getTransactionServiceGroup();
        $extraData = $message->getExtraData();

        $values = [
            $version, $applicationId, $transactionServiceGroup, $extraData,
        ];

        foreach ($values as $value) {
            if ($value !== null) {
                $string = new Strings($value);
                $bytes = $string->getBytes();
                $buffer->putUInt16(count($bytes));
                if ($string->length() > 0) {
                    foreach ($bytes as $byte) {
                        $buffer->putUInt8($byte);
                    }
                }
            } else {
                $buffer->putUInt16(0);
            }
        }

        return $buffer;
    }

    public function decode(AbstractMessage $message, ByteBuffer $buffer): AbstractMessage
    {
        if (! $message instanceof AbstractIdentifyRequest) {
            throw new \InvalidArgumentException('Invalid message');
        }

        // Version
        if ($buffer->remaining() < 2) {
            return $message;
        }
        $length = $buffer->readUShort();
        $message->setVersion($buffer->readString($length));

        // ApplicationId
        if ($buffer->remaining() < 2) {
            return $message;
        }
        $length = $buffer->readUShort();
        $message->setApplicationId($buffer->readString($length));

        // TransactionServiceGroup
        if ($buffer->remaining() < 2) {
            return $message;
        }
        $length = $buffer->readUShort();
        $message->setTransactionServiceGroup($buffer->readString($length));

        // ExtraData
        if ($buffer->remaining() < 2) {
            return $message;
        }
        $length = $buffer->readUShort();
        $message->setTransactionServiceGroup($buffer->readString($length));
    }
}
