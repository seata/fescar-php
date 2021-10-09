<?php

namespace Hyperf\Seata\Core\Protocol\Transaction;


use Hyperf\Seata\Core\Protocol\MessageType;

class GlobalRollbackRequest extends AbstractGlobalEndRequest
{

    public function getTypeCode(): int
    {
        return MessageType::TYPE_GLOBAL_ROLLBACK;
    }
}