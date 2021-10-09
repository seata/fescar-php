<?php

namespace Hyperf\Seata\Core\Codec\Seata\Protocol\Transaction;


use Hyperf\Seata\Core\Protocol\Transaction\BranchRollbackRequest;

class BranchRollbackRequestCodec extends AbstractBranchEndRequestCodec
{
    public function getMessageClassType(): string
    {
        return BranchRollbackRequest::class;
    }


}