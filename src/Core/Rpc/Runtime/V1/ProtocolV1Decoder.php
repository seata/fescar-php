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
namespace Hyperf\Seata\Core\Rpc\Runtime\V1;

use Hyperf\Seata\Core\Codec\CodecFactory;
use Hyperf\Seata\Core\Protocol\Codec\HeadMapSerializer;
use Hyperf\Seata\Core\Protocol\HeartbeatMessage;
use Hyperf\Seata\Core\Protocol\ProtocolConstants;
use Hyperf\Seata\Core\Protocol\RpcMessage;
use Hyperf\Seata\Utils\Buffer\ByteBuffer;

/**
 * <pre>
 * 0     1     2     3     4     5     6     7     8     9    10     11    12    13    14    15    16
 * +-----+-----+-----+-----+-----+-----+-----+-----+-----+-----+-----+-----+-----+-----+-----+-----+
 * |   magic   |Proto|     Full length       |    Head   | Msg |Seria|Compr|     RequestId         |
 * |   code    |colVer|    （head+body)      |   Length  |Type |lizer|ess  |                       |
 * +-----------+-----------+-----------+-----------+-----------+-----------+-----------+-----------+
 * |                                                                                               |
 * |                                   Head Map [Optional]                                         |
 * +-----------+-----------+-----------+-----------+-----------+-----------+-----------+-----------+
 * |                                                                                               |
 * |                                         body                                                  |
 * |                                                                                               |
 * |                                        ... ...                                                |
 * +-----------------------------------------------------------------------------------------------+
 * </pre>
 * <p>
 * <li>Full Length: include all data </li>
 * <li>Head Length: include head data from magic code to head map. </li>
 * <li>Body Length: Full Length - Head Length</li>
 * </p>
 * https://github.com/seata/seata/issues/893.
 *
 * @see ProtocolV1Encoder
 */
class ProtocolV1Decoder
{
    protected CodecFactory $codecFactory;

    public function __construct(CodecFactory $codecFactory)
    {
        $this->codecFactory = $codecFactory;
    }

    public function decode(ByteBuffer $buffer): RpcMessage
    {
        // Magic Code, 2 bytes
        $magicCode0 = $buffer->readUByte();
        $magicCode1 = $buffer->readUByte();
        if ($magicCode0 !== ProtocolConstants::MAGIC_CODE_BYTES[0] || $magicCode1 !== ProtocolConstants::MAGIC_CODE_BYTES[1]) {
            throw new \InvalidArgumentException('Unknow magic code');
        }
        // Version, 1 byte
        $version = $buffer->readUByte();
        if ($version !== ProtocolConstants::VERSION) {
            throw new \InvalidArgumentException('Unsupport protocol version');
        }

        // full Length(4B) and head length(2B) will fix in the end.
        $fullLength = $buffer->readUInt();
        $headLength = $buffer->readUShort();
        // Message Type, 1 byte
        $messageType = $buffer->readUByte();
        // Serialization, 1 byte
        $codecType = $buffer->readUByte();
        // Compress Type, 1 byte
        $compressor = $buffer->readUByte();
        // Message ID, 4 bytes
        $messageId = $buffer->readUInt();

        $rpcMessage = new RpcMessage();
        $rpcMessage->setCodec($codecType);
        $rpcMessage->setCompressor($compressor);
        $rpcMessage->setMessageType($messageType);
        $rpcMessage->setId($messageId);

        // Head Map
        $headMapLength = $headLength - ProtocolConstants::V1_HEAD_LENGTH;
        if ($headMapLength > 0) {
            $headMap = HeadMapSerializer::decode($buffer, $headMapLength);
            $rpcMessage->setHeadMap($headMap);
        }

        // Body
        if ($messageType === ProtocolConstants::MSGTYPE_HEARTBEAT_REQUEST) {
            $rpcMessage->setBody(HeartbeatMessage::ping());
        } elseif ($messageType === ProtocolConstants::MSGTYPE_HEARTBEAT_RESPONSE) {
            $rpcMessage->setBody(HeartbeatMessage::pong());
        } else {
            $bodyLength = $fullLength - $headLength;
            if ($bodyLength > 0) {
                $body = $buffer->readString($bodyLength);
                $codec = $this->codecFactory->get($codecType);
                $rpcMessage->setBody($codec->decode($body));
            }
        }

        return $rpcMessage;
    }
}
