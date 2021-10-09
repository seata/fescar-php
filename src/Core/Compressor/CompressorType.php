<?php

namespace Hyperf\Seata\Core\Compressor;


class CompressorType
{

    public const NONE = 0;
    public const GZIP = 1;
    public const ZIP = 2;
    public const SEVENZ = 3;
    public const BZIP2 = 4;
    public const LZ4 = 5;
    public const DEFLATER = 6;

}