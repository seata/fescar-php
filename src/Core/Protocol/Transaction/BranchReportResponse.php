<?php

namespace Hyperf\Seata\Core\Protocol\Transaction;


use Hyperf\Seata\Core\Protocol\MessageType;

class BranchReportResponse extends AbstractTransactionResponse
{

    public function getTypeCode(): int
    {
        return MessageType::TYPE_BRANCH_STATUS_REPORT_RESULT;
    }
}