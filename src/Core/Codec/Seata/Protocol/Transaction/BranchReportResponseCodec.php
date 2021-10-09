<?php

namespace Hyperf\Seata\Core\Codec\Seata\Protocol\Transaction;


use Hyperf\Seata\Core\Protocol\Transaction\BranchReportResponse;

class BranchReportResponseCodec extends AbstractTransactionResponseCodec
{
    public function getMessageClassType(): string
    {
        return BranchReportResponse::class;
    }


}