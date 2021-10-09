<?php

namespace Hyperf\Seata\Core\Codec\Seata\Protocol\Transaction;


use Hyperf\Seata\Core\Protocol\Transaction\GlobalRollbackResponse;

class GlobalRollbackResponseCodec extends AbstractGlobalEndResponseCodec
{
    public function getMessageClassType(): string
    {
        return GlobalRollbackResponse::class;
    }

}