<?php

namespace Hyperf\Seata\Core\Protocol\Codec;


use Hyperf\Seata\Utils\Buffer\ByteBuffer;

class HeadMapSerializer
{

    /**
     * @return int Length of heap map
     */
    public static function encode(array $headMap, ByteBuffer $buffer): int
    {
        $length = 0;
        $content = '';
        if (! $headMap) {
            return 0;
        }
        $start = $buffer->getPosition();
        foreach ($headMap as $key => $value) {
            if ($key !== null && $value !== null) {
                [$tempBin, $tempLength] = static::writeString((string) $key);
                $content .= $tempBin;
                $length += $tempLength;
                [$tempBin, $tempLength] = static::writeString((string) $value);
                $content .= $tempBin;
                $length += $tempLength;
            }
        }
        return $buffer->getPosition() - $start;
    }

    public static function decode(ByteBuffer $buffer, int $length): array
    {
        $map = [];
        if ($length === 0) {
            return $map;
        }
        // @TODO 实现 Head Map decode
        return $map;
    }

    protected static function readString(ByteBuffer $buffer): ?string
    {
        $content = '';
        $length = $buffer->readUShort();
        if ($length < 0) {
            return null;
        } elseif (intval($length) === 0) {
            return '';
        } else {
            return $buffer->readString($length);
        }
    }

    protected static function writeString(Strings $string): array
    {
        $content = '';
        if ($string === '') {
            $content = Packer::packUInt16(0);
        } else {
            $bytes = Packer::str2bin($string);
            $content .= Packer::packUInt16(strlen($bytes));
            $content .= $bytes;
        }
        return [$content, strlen($content)];
    }

}