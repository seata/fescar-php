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
namespace Hyperf\Seata\Core\Protocol\Codec;

class Packer
{
    public static function packHex($data)
    {
        $result = '';
        foreach ((array) $data as $item) {
            $result .= static::packUInt8(intval($item) & 0xFF);
        }
        return $result;
    }

    public static function packUInt8($int)
    {
        return pack('C', $int);
    }

    public static function packUInt32($int)
    {
        return pack('N', $int);
    }

    public static function packUInt16($int)
    {
        return pack('n', $int);
    }

    public static function unpackUInt32($int)
    {
        return unpack('N', $int);
    }

    public static function unpackInt64($int)
    {
        return unpack('q', $int)[1];
    }

    public static function unpackUInt16($int)
    {
        return unpack('n', $int)[1];
    }

    public static function unpackUInt8($int)
    {
        return unpack('C', $int)[1];
    }

    public static function unpackString(string $content): string
    {
        $size = strlen($content);
        $bytes = unpack("c{$size}chars", $content);
        $string = '';
        foreach ($bytes as $byte) {
            $string .= chr($byte);
        }
        return $string;
    }

    public static function bin2text(string $string)
    {
        $arr = explode(' ', $string);
        foreach ($arr as &$v) {
            $v = pack('H' . strlen(base_convert($v, 2, 16)), base_convert($v, 2, 16));
        }
        return join('', $arr);
    }

    public static function str2bin(string $string)
    {
        $arr = preg_split('/(?<!^)(?!$)/u', $string);
        foreach ($arr as &$v) {
            $temp = unpack('H*', $v);
            $v = base_convert($temp[1], 16, 2);
            unset($temp);
        }
        return join(' ', $arr);
    }
}
