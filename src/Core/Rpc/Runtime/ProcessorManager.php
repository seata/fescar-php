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
namespace Hyperf\Seata\Core\Rpc\Runtime;

use Hyperf\Seata\Core\Protocol\RpcMessage;
use Hyperf\Seata\Core\Rpc\Processor\RemotingProcessorInterface;

class ProcessorManager
{
    /**
     * @var RemotingProcessorInterface[]
     */
    protected array $processorTable = [];

    public function registerProcessor(int $messageType, RemotingProcessorInterface $processor): void
    {
        $this->processorTable[$messageType] = $processor;
    }

    public function dispatch(SocketChannelInterface $channel, RpcMessage $message)
    {
        if (! isset($this->processorTable[$message->getBody()->getTypeCode()])) {
            return;
        }
        $this->processorTable[$message->getBody()->getTypeCode()]->process($channel, $message);
    }
}
