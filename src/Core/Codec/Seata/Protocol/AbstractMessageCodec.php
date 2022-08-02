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
namespace Hyperf\Seata\Core\Codec\Seata\Protocol;

use Hyperf\Seata\Core\Codec\Seata\MessageSeataCodecInterface;
use Hyperf\Seata\Core\Protocol\Codec\Strings;
use Hyperf\Seata\Utils\Buffer\ByteBuffer;

abstract class AbstractMessageCodec implements MessageSeataCodecInterface
{
    protected function putProperty(ByteBuffer $buffer, ?string $string, $lengthBits = 16)
    {
        $methodName = 'putUInt' . $lengthBits;
        if ($string !== null) {
            $string = new Strings($string);
            $bytes = $string->getBytes();
            $count = count($bytes);
            $buffer->{$methodName}($count);
            if ($count > 0) {
                foreach ($bytes as $byte) {
                    $buffer->putUByte($byte);
                }
            }
        } else {
            $buffer->{$methodName}(0);
        }
    }
}
