<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
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
