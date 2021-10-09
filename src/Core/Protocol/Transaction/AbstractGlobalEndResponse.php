<?php

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