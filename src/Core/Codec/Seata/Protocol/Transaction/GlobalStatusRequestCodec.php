<?php

namespace Hyperf\Seata\Core\Codec\Seata\Protocol\Transaction;


use Hyperf\Seata\Core\Protocol\Transaction\GlobalStatusRequest;

class GlobalStatusRequestCodec extends AbstractGlobalEndRequestCodec
{

    public function getMessageClassType(): string
    {
        return GlobalStatusRequest::class;
    }

}