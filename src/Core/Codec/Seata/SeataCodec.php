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
namespace Hyperf\Seata\Core\Codec\Seata;

use Hyperf\Seata\Core\Codec\CodecInterface;
use Hyperf\Seata\Core\Protocol\AbstractMessage;
use Hyperf\Seata\Utils\Buffer\ByteBuffer;

class SeataCodec implements CodecInterface
{
    /**
     * @var MessageCodecFactory
     */
    protected $messageCodecFactory;

    public function __construct(MessageCodecFactory $messageCodecFactory)
    {
        $this->messageCodecFactory = $messageCodecFactory;
    }

    public function encode(AbstractMessage $message, ByteBuffer $buffer): ByteBuffer
    {
        $typeCode = $message->getTypeCode();
        // Message Codec
        $messageCodec = $this->messageCodecFactory->getMessageCodec($typeCode);
        $buffer->putUInt16($typeCode);
        $messageCodec->encode($message, $buffer);
        return $buffer;
    }

    public function decode(string $content)
    {
        $length = strlen($content);
        if (! $length) {
            throw new \InvalidArgumentException('Nothing to decode');
        }
        if ($length < 2) {
            throw new \InvalidArgumentException('The data is not available for decode');
        }
        $buffer = ByteBuffer::wrapString($content);
        $typeCode = $buffer->readUShort();
        // New Message
        $message = $this->messageCodecFactory->getMessage($typeCode);
        // Message Codec
        $messageCodec = $this->messageCodecFactory->getMessageCodec($typeCode);
        $messageCodec->decode($message, $buffer);
        return $message;
    }
}
