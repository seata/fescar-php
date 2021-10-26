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
namespace Hyperf\Seata\Core\Rpc\Runtime\V1;

use Hyperf\Seata\Core\Codec\CodecFactory;
use Hyperf\Seata\Core\Protocol\Codec\HeadMapSerializer;
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
 */
class ProtocolV1Encoder
{
    protected CodecFactory $codecFactory;

    public function __construct(CodecFactory $codecFactory)
    {
        $this->codecFactory = $codecFactory;
    }

    public function encode($message): string
    {
        if ($message instanceof RpcMessage) {
            $buffer = ByteBuffer::allocate();

            $fullLength = ProtocolConstants::V1_HEAD_LENGTH;
            $headLength = ProtocolConstants::V1_HEAD_LENGTH;

            // Head Map, n bytes
            // full Length(4B) and head length(2B) will fix in the end.
            $headMap = $message->getHeadMap();
            $headMapLength = HeadMapSerializer::encode($headMap, $buffer);
            $headLength += $headMapLength;
            $fullLength += $headMapLength;

            // Body, n bytes
            $bodyBuffer = ByteBuffer::allocate();
            $messageType = $message->getMessageType();
            if ($messageType !== ProtocolConstants::MSGTYPE_HEARTBEAT_REQUEST && $messageType !== ProtocolConstants::MSGTYPE_HEARTBEAT_RESPONSE) {
                // heartbeat has no body
                $codec = $this->codecFactory->get($message->getCodec());
                $bodyBuffer = $codec->encode($message->getBody(), $bodyBuffer);
                $fullLength += $bodyBuffer->binaryLength();
            }
            // Magic Code, 2 bytes
            $buffer->putHex(ProtocolConstants::MAGIC_CODE_BYTES[0]);
            $buffer->putHex(ProtocolConstants::MAGIC_CODE_BYTES[1]);
            // Version, 1 byte
            $buffer->putHex(ProtocolConstants::VERSION);
            // Full length and Head length
            $buffer->putUInt32($fullLength);
            $buffer->putUInt16($headLength);
            // Message Type, 1 byte
            $buffer->putHex($message->getMessageType());
            // Serialization, 1 byte
            $buffer->putHex($message->getCodec());
            // Compress Type, 1 byte
            $buffer->putHex($message->getCompressor());
            // Message ID, 4 bytes
            $buffer->putUInt32($message->getId());
            // Merge body buffer
            $buffer->merge($bodyBuffer);
            return $buffer->toBinary();
        }
    }
}
