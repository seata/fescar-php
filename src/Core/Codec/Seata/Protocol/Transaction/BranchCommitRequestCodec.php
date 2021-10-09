<?php

namespace Hyperf\Seata\Core\Codec\Seata\Protocol\Transaction;


use Hyperf\Seata\Core\Protocol\Transaction\BranchCommitRequest;

class BranchCommitRequestCodec extends AbstractBranchEndRequestCodec
{
    public function getMessageClassType(): string
    {
        return BranchCommitRequest::class;
    }


}