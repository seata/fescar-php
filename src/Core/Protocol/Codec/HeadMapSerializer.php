<?php

declare(strict_types=1);
/**
 * Copyright 2019-2022 Seata.io Group.
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
        }
        if (intval($length) === 0) {
            return '';
        }
        return $buffer->readString($length);
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
