<?php

namespace Hyperf\Seata\Core\Protocol\Transaction;

use Hyperf\Seata\Core\Model\GlobalStatus;

abstract class AbstractGlobalEndResponse extends AbstractTransactionResponse
{

    /**
     * @var GlobalStatus
     * @see \Hyperf\Seata\Core\Model\GlobalStatus
     */
    protected $globalStatus;

    public function getGlobalStatus(): GlobalStatus
    {
        return $this->globalStatus;
    }

    /**
     * @return $this
     */
    public function setGlobalStatus(GlobalStatus $globalStatus)
    {
        $this->globalStatus = $globalStatus;
        return $this;
    }

}