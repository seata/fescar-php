<?php

namespace Hyperf\Seata\Core\Codec\Seata\Protocol\Transaction;


use Hyperf\Seata\Core\Protocol\Transaction\AbstractTransactionRequestToTC;

abstract class AbstractTransactionRequestToTCCodec extends AbstractTransactionRequestCodec
{
    public function getMessageClassType(): string
    {
        return AbstractTransactionRequestToTC::class;
    }


}