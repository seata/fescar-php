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
namespace Hyperf\Seata\Tm\Api\CheckTimerTask;

use Hyperf\Contract\StdoutLoggerInterface;
use Hyperf\Seata\Core\Model\GlobalStatus;
use Hyperf\Seata\Tm\Api\GlobalTransaction;
use Swoole\Timer;

class SwooleCheckTimerTask implements CheckTimerTaskInterface
{
    /**
     * Retry 1 hours by default.
     */
    private const RETRY_MAX_TIMES = 6 * 60;

    private const SCHEDULE_INTERVAL_SECONDS = 10 * 1000;

    /**
     * @var StdoutLoggerInterface
     */
    protected $logger;

    private static $count = 0;

    /**
     * @var GlobalTransaction
     */
    private $tx;

    /**
     * @var GlobalStatus
     */
    private $required;

    private $isStopped = false;

    public function __construct(StdoutLoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function run()
    {
        Timer::tick(self::SCHEDULE_INTERVAL_SECONDS, function ($timerId) {
            if ($this->isStopped) {
                Timer::clear($timerId);
                return;
            }

            if (++static::$count > self::RETRY_MAX_TIMES) {
                $this->logger->error(sprintf('Transaction [%s] retry fetch status times exceed the limit [%s times]', $this->tx->getXid(), self::RETRY_MAX_TIMES));
                return;
            }

            $this->isStopped = $this->shouldStop();
        });
    }

    public function setTx(GlobalTransaction $tx): CheckTimerTaskInterface
    {
        $this->tx = $tx;
        return $this;
    }

    public function setRequired(GlobalStatus $required): CheckTimerTaskInterface
    {
        $this->required = $required;
        return $this;
    }

    private function shouldStop(): bool
    {
        /** @var GlobalStatus $status */
        $status = $this->tx->getStatus();
        $this->logger->info(sprintf('Transaction [%s] current status is [%s]', $this->tx->getXid(), $status));
        if ($status->getStatus() == $this->required->getStatus() || $status->getStatus() == GlobalStatus::Finished) {
            return true;
        }
        return false;
    }
}
