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
namespace Hyperf\Seata\Tm\Api;

use Hyperf\Contract\StdoutLoggerInterface;
use Hyperf\Seata\Core\Model\GlobalStatus;
use Hyperf\Seata\Tm\Api\CheckTimerTask\CheckTimerTaskInterface;
use Throwable;

class DefaultFailureHandlerImpl implements FailureHandler
{
    /**
     * @var StdoutLoggerInterface
     */
    private $logger;

    /**
     * Retry 1 hours by default.
     */
    private static $RETRY_MAX_TIMES = 6 * 60;

    /**
     * @var int
     */
    private static $SCHEDULE_INTERVAL_SECONDS = 10;

    /**
     * @var int
     */
    private static $TICK_DURATION = 1;

    /**
     * @var int
     */
    private static $TICKS_PER_WHEEL = 8;

    /**
     * @var int
     */
    private $count = 0;

    public function __construct(StdoutLoggerInterface $logger, CheckTimerTaskInterface $timer)
    {
        $this->logger = $logger;
        $this->timer = $timer;
    }

    public function onBeginFailure(GlobalTransaction $tx, Throwable $cause)
    {
        $this->logger->warning('Failed to begin Transaction. ');
    }

    public function onCommitFailure(GlobalTransaction $tx, Throwable $cause)
    {
        $this->logger->warning('Failed to commit Transaction[' . $tx->getXid() . ']');
        $globalStatus = new GlobalStatus(GlobalStatus::Committed);
        make(CheckTimerTaskInterface::class)->setTx($tx)->setRequired($globalStatus)->run();
    }

    public function onRollbackFailure(GlobalTransaction $tx, Throwable $originalException)
    {
        $this->logger->warning('Failed to rollback Transaction[' . $tx->getXid() . ']');
        $globalStatus = new GlobalStatus(GlobalStatus::Rollbacked);
        make(CheckTimerTaskInterface::class)->setTx($tx)->setRequired($globalStatus)->run();
    }

    public function onRollbackRetrying(GlobalTransaction $tx, Throwable $originalException)
    {
        $this->logger->warning('Retrying to rollback Transaction[' . $tx->getXid() . ']');
        $globalStatus = new GlobalStatus(GlobalStatus::RollbackRetrying);
        make(CheckTimerTaskInterface::class)->setTx($tx)->setRequired($globalStatus)->run();
    }
}
