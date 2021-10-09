<?php

namespace Hyperf\Seata\Core\Protocol;


use Hyperf\Seata\Core\Codec\CodecType;
use Hyperf\Seata\Core\Codec\CompressorType;

class ProtocolConstants
{

    /**
     * Magic code
     */
    public const MAGIC_CODE_BYTES = [0xda, 0xda];

    /**
     * Protocol version
     */
    public const VERSION = 0x1;

    /**
     * Max frame length
     */
    public const MAX_FRAME_LENGTH = 8 * 1024 * 1024;

    /**
     * HEAD_LENGTH of protocol v1
     */
    public const V1_HEAD_LENGTH = 16;

    /**
     * Message type: Request
     */
    public const MSGTYPE_RESQUEST = 0x0;
    /**
     * Message type: Response
     */
    public const MSGTYPE_RESPONSE = 0x1;
    /**
     * Message type: Request which no need response
     */
    public const MSGTYPE_RESQUEST_ONEWAY = 0x2;
    /**
     * Message type: Heartbeat Request
     */
    public const MSGTYPE_HEARTBEAT_REQUEST = 0x3;
    /**
     * Message type: Heartbeat Response
     */
    public const MSGTYPE_HEARTBEAT_RESPONSE = 0x4;

    // public const byte MSGTYPE_NEGOTIATOR_REQUEST = 5;
    // public const byte MSGTYPE_NEGOTIATOR_RESPONSE = 6;

    /**
     * Configured codec by user, default is SEATA
     *
     * @see CodecType#SEATA
     * @todo 允许从配置文件中读取
     */
    public const CONFIGURED_CODEC = CodecType::SEATA;

    /**
     * Configured compressor by user, default is NONE
     *
     * @see CompressorType#NONE
     * @todo 允许从配置文件中读取
     */
    public const CONFIGURED_COMPRESSOR = CompressorType::NONE;

}