<?php

namespace Hyperf\Seata\Core\Codec\Seata\Protocol\Transaction;


use Hyperf\Seata\Core\Protocol\Transaction\GlobalCommitRequest;

class GlobalCommitRequestCodec extends AbstractGlobalEndRequestCodec
{
    public function getMessageClassType(): string
    {
        return GlobalCommitRequest::class;
    }


}