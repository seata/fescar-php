<?php

namespace Hyperf\Seata\Core\Protocol\Transaction;


use Hyperf\Seata\Core\Protocol\MessageType;

class GlobalStatusResponse extends AbstractGlobalEndResponse
{

    public function getTypeCode(): int
    {
        return MessageType::TYPE_GLOBAL_STATUS_RESULT;
    }
}