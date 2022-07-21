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
namespace Hyperf\Seata\Core\Rpc\Runtime;

use Hyperf\Seata\Core\Protocol\MergedWarpMessage;
use Hyperf\Seata\Exception\SeataException;
use Hyperf\Utils\ApplicationContext;
use Hyperf\Utils\Coroutine;

class MergedSendRunnable
{
    protected bool $isSending;

    protected array $basketMap;

    protected SocketManager $socketManager;

    /**
     * @var AbstractRemotingClient
     */
    protected $remotingClient;

    public function __construct(bool $isSending, array $basketMap, AbstractRemotingClient $abstractRemotingClient)
    {
        $container = ApplicationContext::getContainer();
        $this->isSending = $isSending;
        $this->basketMap = $basketMap;
        $this->socketManager = $container->get(SocketManager::class);
        $this->remotingClient = $abstractRemotingClient;
    }

    public function run()
    {
        Coroutine::create(function () {
            while (true) {
                if ($this->isSending) {
                    return;
                }

                $this->isSending = true;
                foreach ($this->basketMap as $address => $basket) {
                    if (empty($basket)) {
                        return;
                    }

                    $mergeMessage = new MergedWarpMessage();
                    while (! empty($basket)) {
                        $msg = array_pop($basket);
                        $mergeMessage->msgs[] = $msg->getBody();
                        $mergeMessage->msgIds[] = $msg->getId();
                    }

                    if (count($mergeMessage->msgIds) > 1) {
                        $this->printMergeMessageLog($mergeMessage);
                    }

                    $socketChannel = null;
                    try {
                        // send batch message is sync request, but there is no need to get the return value.
                        // Since the messageFuture has been created before the message is placed in basketMap,
                        // the return value will be obtained in ClientOnResponseProcessor.
                        $socketChannel = $this->socketManager->acquireChannel($address);
                        $this->remotingClient->sendAsyncRequest($socketChannel, $mergeMessage);
                    } catch (SeataException $exception) {
                        // TODO 待处理
                    }
                }
                $this->isSending = false;
            }
        });
    }

    private function printMergeMessageLog(MergedWarpMessage $mergeMessage)
    {
//            if (LOGGER.isDebugEnabled()) {
//                LOGGER.debug("merge msg size:{}", mergeMessage.msgIds.size());
//                for (AbstractMessage cm : mergeMessage.msgs) {
//                    LOGGER.debug(cm.toString());
//                }
        // StringBuilder sb = new StringBuilder();
//                for (long l : mergeMessage.msgIds) {
//                    sb.append(MSG_ID_PREFIX).append(l).append(SINGLE_LOG_POSTFIX);
//                }
//                sb.append("\n");
//                for (long l : futures.keySet()) {
//                    sb.append(FUTURES_PREFIX).append(l).append(SINGLE_LOG_POSTFIX);
//                }
//                LOGGER.debug(sb.toString());
//            }
    }
}
