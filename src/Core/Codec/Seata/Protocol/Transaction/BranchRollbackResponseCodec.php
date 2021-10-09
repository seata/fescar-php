<?php

namespace Hyperf\Seata\Core\Codec\Seata\Protocol\Transaction;


use Hyperf\Seata\Core\Protocol\Transaction\BranchRollbackResponse;

class BranchRollbackResponseCodec extends AbstractBranchEndResponseCodec
{
    public function getMessageClassType(): string
    {
        return BranchRollbackResponse::class;
    }

}