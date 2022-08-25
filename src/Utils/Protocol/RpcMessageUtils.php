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
namespace Hyperf\Seata\Utils\Protocol;

use Hyperf\Seata\Core\Protocol\RpcMessage;

class RpcMessageUtils
{
    /**
     * 用于debug时，查看通信内容的工具
     * format: "id | messageType | codec | compresser | headMap json | body".
     *
     * @param RpcMessage $rpcMessage rpc通信抽象类
     */
    public static function toLogString(RpcMessage $rpcMessage): string
    {
        return $rpcMessage->getId() . '|' . $rpcMessage->getMessageType() . '|' . $rpcMessage->getCodec() . '|' . $rpcMessage->getCompressor() . '|' . json_encode($rpcMessage->getHeadMap()) . '|' . json_encode($rpcMessage->getBody());
    }
}
