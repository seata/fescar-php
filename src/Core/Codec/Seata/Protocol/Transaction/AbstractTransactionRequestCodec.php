<?php

namespace Hyperf\Seata\Core\Codec\Seata\Protocol\Transaction;


use Hyperf\Seata\Core\Codec\Seata\Protocol\AbstractMessageCodec;
use Hyperf\Seata\Core\Codec\Seata\the;
use Hyperf\Seata\Core\Protocol\Transaction\AbstractTransactionRequest;

abstract class AbstractTransactionRequestCodec extends AbstractMessageCodec
{
    public function getMessageClassType(): string
    {
        return AbstractTransactionRequest::class;
    }

}