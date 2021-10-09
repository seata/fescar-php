<?php

namespace Hyperf\Seata\Core\Codec\Seata\Protocol\Transaction;


use Hyperf\Seata\Core\Protocol\Transaction\GlobalCommitResponse;

class GlobalCommitResponseCodec extends AbstractGlobalEndResponseCodec
{
    public function getMessageClassType(): string
    {
        return GlobalCommitResponse::class;
    }

}