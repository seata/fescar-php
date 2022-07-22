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
namespace Hyperf\Seata\Core\Rpc\Processor\Client;

use Hyperf\Seata\Core\Protocol\AbstractResultMessage;
use Hyperf\Seata\Core\Protocol\RpcMessage;
use Hyperf\Seata\Core\Rpc\Processor\AbstractRemotingProcessor;
use Hyperf\Seata\Core\Rpc\Runtime\SocketChannelInterface;
use Hyperf\Seata\Core\Rpc\TransactionMessageHandler;

class ClientOnResponseProcessor extends AbstractRemotingProcessor
{
    private null|TransactionMessageHandler $transactionMessageHandler;

    public function __construct(?TransactionMessageHandler $transactionMessageHandler)
    {
        $this->transactionMessageHandler = $transactionMessageHandler;
    }

    public function process(SocketChannelInterface $channel, RpcMessage $rpcMessage)
    {
        if ($rpcMessage->getBody() instanceof AbstractResultMessage && $this->transactionMessageHandler != null) {
            $this->transactionMessageHandler->onResponse($rpcMessage->getBody(), null);
        }
    }
}
