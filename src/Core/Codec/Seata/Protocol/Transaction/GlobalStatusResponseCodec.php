<?php

namespace Hyperf\Seata\Core\Codec\Seata\Protocol\Transaction;


use Hyperf\Seata\Core\Protocol\Transaction\GlobalStatusResponse;

class GlobalStatusResponseCodec extends AbstractGlobalEndResponseCodec
{

    public function getMessageClassType(): string
    {
        return GlobalStatusResponse::class;
    }

}