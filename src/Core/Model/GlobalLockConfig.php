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
namespace Hyperf\Seata\Core\Model;

class GlobalLockConfig
{
    /**
     * @var int
     */
    private $lockRetryInterval;

    /**
     * @var int
     */
    private $lockRetryTimes;

    public function getLockRetryInterval(): int
    {
        return $this->lockRetryInterval;
    }

    public function setLockRetryInterval(int $lockRetryInterval): void
    {
        $this->lockRetryInterval = $lockRetryInterval;
    }

    public function getLockRetryTimes(): int
    {
        return $this->lockRetryTimes;
    }

    public function setLockRetryTimes(int $lockRetryTimes): void
    {
        $this->lockRetryTimes = $lockRetryTimes;
    }
}
