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
namespace Hyperf\Seata\Core\Rpc\Processor\Client;

use Exception;
use Hyperf\Seata\Core\Protocol\RpcMessage;
use Hyperf\Seata\Core\Protocol\Transaction\UndoLogDeleteRequest;
use Hyperf\Seata\Core\Rpc\Processor\AbstractRemotingProcessor;
use Hyperf\Seata\Core\Rpc\TransactionMessageHandler;

class RmUndoLogProcessor extends AbstractRemotingProcessor
{
    private TransactionMessageHandler $handler;

    public function __construct(TransactionMessageHandler $handler)
    {
        $this->handler = $handler;
    }

    public function process($channel, RpcMessage $rpcMessage)
    {
        /** @var UndoLogDeleteRequest $msg */
        $msg = $rpcMessage->getBody();
        $this->getLogger()->info(sprintf('rm handle undo log process:%s', $msg));
        $this->handleUndoLogDelete($msg);
    }

    private function handleUndoLogDelete(UndoLogDeleteRequest $undoLogDeleteRequest)
    {
        try {
            $this->handler->onRequest($undoLogDeleteRequest, null);
        } catch (Exception $exception) {
            $this->getLogger()->error(sprintf('Failed to delete undo log by undoLogDeleteRequest on %s', $undoLogDeleteRequest->getResourceId()));
        }
    }
}
