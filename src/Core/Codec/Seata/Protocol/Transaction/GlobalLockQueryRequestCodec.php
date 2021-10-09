<?php

namespace Hyperf\Seata\Core\Codec\Seata\Protocol\Transaction;


use Hyperf\Seata\Core\Protocol\Transaction\GlobalLockQueryRequest;

class GlobalLockQueryRequestCodec extends BranchRegisterRequestCodec
{
    public function getMessageClassType(): string
    {
        return GlobalLockQueryRequest::class;
    }

}