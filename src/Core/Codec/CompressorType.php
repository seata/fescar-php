<?php

namespace Hyperf\Seata\Core\Codec;


class CompressorType
{

    /**
     * Not compress
     */
    const NONE = 0x0;

    /**
     * The gzip.
     */
    const GZIP = 0x1;

}