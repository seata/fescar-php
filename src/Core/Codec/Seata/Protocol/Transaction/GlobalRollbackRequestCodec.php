<?php

namespace Hyperf\Seata\Core\Codec\Seata\Protocol\Transaction;


use Hyperf\Seata\Core\Protocol\Transaction\GlobalRollbackRequest;

class GlobalRollbackRequestCodec extends AbstractGlobalEndRequestCodec
{
    public function getMessageClassType(): string
    {
        return GlobalRollbackRequest::class;
    }

}