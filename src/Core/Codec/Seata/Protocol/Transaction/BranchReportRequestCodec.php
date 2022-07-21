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
namespace Hyperf\Seata\Core\Codec\Seata\Protocol\Transaction;

use Hyperf\Seata\Core\Protocol\AbstractMessage;
use Hyperf\Seata\Core\Protocol\Transaction\BranchReportRequest;
use Hyperf\Seata\Utils\Buffer\ByteBuffer;

class BranchReportRequestCodec extends AbstractTransactionRequestToTCCodec
{
    public function getMessageClassType(): string
    {
        return BranchReportRequest::class;
    }

    public function encode(AbstractMessage $message, ByteBuffer $buffer): ByteBuffer
    {
        if (! $message instanceof BranchReportRequest) {
            throw new \InvalidArgumentException('Invalid message');
        }

        // Xid
        $this->putProperty($buffer, $message->getXid());
        // Branch Id
        $buffer->putULong($message->getBranchId());
        // Branch Status
        $buffer->putUByte($message->getStatus());
        // Resource Id
        $this->putProperty($buffer, $message->getResourceId());
        // Application Data
        $this->putProperty($buffer, $message->getApplicationData(), 32);
        // Branch Type
        $buffer->putUByte($message->getBranchType());
    }

    public function decode(AbstractMessage $message, ByteBuffer $buffer): AbstractMessage
    {
        if (! $message instanceof BranchReportRequest) {
            throw new \InvalidArgumentException('Invalid message');
        }

        // Xid
        $length = $buffer->readUShort();
        if ($length > 0) {
            $message->setXid($buffer->readString($length));
        }
        // Branch Id
        $message->setBranchId($buffer->readULong());
        // Branch Status
        $message->setStatus($buffer->readUByte());
        // Resource Id
        $length = $buffer->readUShort();
        if ($length > 0) {
            $message->setResourceId($buffer->readString($length));
        }
        // Application Data
        $length = $buffer->readUInt();
        if ($length > 0) {
            $message->setApplicationData($buffer->readString($length));
        }
        // Branch Type
        $message->setBranchType($buffer->readUByte());
    }
}
