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
        $this->logger->warning('Failed to begin transaction. ');
    }

    public function onCommitFailure(GlobalTransaction $tx, Throwable $cause)
    {
        $this->logger->warning('Failed to commit transaction[' . $tx->getXid() . ']');
        $globalStatus = new GlobalStatus(GlobalStatus::Committed);
        make(CheckTimerTaskInterface::class)->setTx($tx)->setRequired($globalStatus)->run();
    }

    public function onRollbackFailure(GlobalTransaction $tx, Throwable $originalException)
    {
        $this->logger->warning('Failed to rollback transaction[' . $tx->getXid() . ']');
        $globalStatus = new GlobalStatus(GlobalStatus::Rollbacked);
        make(CheckTimerTaskInterface::class)->setTx($tx)->setRequired($globalStatus)->run();
    }

    public function onRollbackRetrying(GlobalTransaction $tx, Throwable $originalException)
    {
        $this->logger->warning('Retrying to rollback transaction[' . $tx->getXid() . ']');
        $globalStatus = new GlobalStatus(GlobalStatus::RollbackRetrying);
        make(CheckTimerTaskInterface::class)->setTx($tx)->setRequired($globalStatus)->run();
    }

}
