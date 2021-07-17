<?php


namespace Hyperf\Seata\Core\Protocol\Transaction;


use Hyperf\Seata\Core\Model\GlobalStatus;
use Hyperf\Seata\Core\Protocol\MessageType;

class GlobalReportRequest extends AbstractGlobalEndRequest
{
    /**
     * @var GlobalStatus
     */
    protected $globalStatus;

    public function getTypeCode(): int
    {
        return MessageType::TYPE_GLOBAL_REPORT;
    }

    /**
     * @return GlobalStatus
     */
    public function getGlobalStatus(): GlobalStatus
    {
        return $this->globalStatus;
    }

    /**
     * @param GlobalStatus $globalStatus
     */
    public function setGlobalStatus(GlobalStatus $globalStatus): void
    {
        $this->globalStatus = $globalStatus;
    }


}