<?php

declare(strict_types=1);
/**
 * Copyright 2019-2022 Seata.io Group.
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
namespace Hyperf\Seata\Core\Codec\Seata\Protocol\Transaction;

use Hyperf\Seata\Core\Protocol\AbstractMessage;
use Hyperf\Seata\Core\Protocol\Transaction\AbstractGlobalEndRequest;
use Hyperf\Seata\Utils\Buffer\ByteBuffer;

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
        return $buffer;
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
        return $message;
    }
}
