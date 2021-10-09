<?php

namespace Hyperf\Seata\Core\Codec;


class CodecType
{

    /**
     * The seata.
     * <p>
     * Math.pow(2, 0)
     */
    const SEATA = 0x1;

    /**
     * The protobuf.
     * <p>
     * Math.pow(2, 1)
     */
    const PROTOBUF = 0x2;

}