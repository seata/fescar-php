<?php

namespace Hyperf\Seata\Core\Protocol\Transaction;


use Hyperf\Seata\Core\Protocol\MessageType;

class GlobalRollbackResponse extends AbstractGlobalEndResponse
{

    public function getTypeCode(): int
    {
        return MessageType::TYPE_GLOBAL_ROLLBACK_RESULT;
    }
}