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
namespace Hyperf\Seata\Core\Protocol\Codec;

use Hyperf\Seata\Core\Codec\CodecFactory;
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
    /**
     * @var CodecFactory
     */
    protected $codecFactory;

    public function __construct(CodecFactory $codecFactory)
    {
        $this->codecFactory = $codecFactory;
    }

    public function decode(ByteBuffer $buffer)
    {
        $magicCode0 = $buffer->readUByte();
        $magicCode1 = $buffer->readUByte();
        if ($magicCode0 !== ProtocolConstants::MAGIC_CODE_BYTES[0] || $magicCode1 !== ProtocolConstants::MAGIC_CODE_BYTES[1]) {
            throw new \InvalidArgumentException('Unknow magic code');
        }
        $version = $buffer->readUByte();
        if ($version !== ProtocolConstants::VERSION) {
            throw new \InvalidArgumentException('Unsupport protocol version');
        }
        $fullLength = $buffer->readUInt();
        $headLength = $buffer->readUShort();
        $messageType = $buffer->readUByte();
        $codecType = $buffer->readUByte();
        $compressor = $buffer->readUByte();
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
