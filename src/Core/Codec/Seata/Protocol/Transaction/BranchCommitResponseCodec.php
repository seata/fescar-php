<?php

namespace Hyperf\Seata\Core\Codec\Seata\Protocol\Transaction;


use Hyperf\Seata\Core\Protocol\Transaction\BranchCommitResponse;

class BranchCommitResponseCodec extends AbstractBranchEndResponseCodec
{
    public function getMessageClassType(): string
    {
        return BranchCommitResponse::class;
    }


}