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
namespace Hyperf\Seata\Core\Rpc;

use Hyperf\Seata\Core\Protocol\AbstractMessage;
use Hyperf\Seata\Core\Protocol\RpcMessage;
use Hyperf\Seata\Core\Rpc\Runtime\SocketChannelInterface;

interface RemotingClientInterface
{
    public function sendSyncRequest(SocketChannelInterface $socketChannel, object $message);

    public function sendAsyncRequest(
        SocketChannelInterface $socketChannel,
        AbstractMessage $message,
        int $timeout = 100,
        bool $withResponse = false
    );

    /**
     * client send async response.
     *
     * @param serverAddress server address
     * @param rpcMessage    rpc message from server request
     * @param msg           transaction message {@link io.seata.core.protocol}
     */
    public function sendAsyncResponse(Address $serverAddress, RpcMessage $rpcMessage, object $message);

    /**
     * On register msg success.
     *
     * @param serverAddress  the server address
     * @param channel        the channel
     * @param response       the response
     * @param requestMessage the request message
     * @param mixed $channel
     */
    public function onRegisterMsgSuccess(string $serverAddress, Address $channel, object $response, AbstractMessage $requestMessage);

    /**
     * On register msg fail.
     *
     * @param serverAddress  the server address
     * @param channel        the channel
     * @param response       the response
     * @param requestMessage the request message
     * @param mixed $channel
     */
    public function onRegisterMsgFail(string $serverAddress, Address $channel, object $response, AbstractMessage $requestMessage);
}
