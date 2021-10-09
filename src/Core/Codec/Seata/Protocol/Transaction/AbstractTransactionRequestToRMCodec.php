<?php

namespace Hyperf\Seata\Core\Codec\Seata\Protocol\Transaction;


use Hyperf\Seata\Core\Protocol\Transaction\AbstractTransactionRequestToRM;

abstract class AbstractTransactionRequestToRMCodec extends AbstractTransactionRequestCodec
{
    public function getMessageClassType(): string
    {
        return AbstractTransactionRequestToRM::class;
    }

}