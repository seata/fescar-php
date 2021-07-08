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
namespace Hyperf\Seata\Core\Protocol\Transaction;

abstract class AbstractGlobalEndResponse extends AbstractTransactionResponse
{
    /**
     * @var int
     * @see \Hyperf\Seata\Core\Model\GlobalStatus
     */
    protected $globalStatus;

    public function getGlobalStatus(): int
    {
        return $this->globalStatus;
    }

    /**
     * @return $this
     */
    public function setGlobalStatus(int $globalStatus)
    {
        $this->globalStatus = $globalStatus;
        return $this;
    }
}
