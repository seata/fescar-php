<?php

namespace Hyperf\Seata\Core\Protocol\Transaction;


use Hyperf\Seata\Core\Protocol\MessageType;

class GlobalLockQueryRequest extends BranchRegisterRequest
{
    public function getTypeCode(): int
    {
        return MessageType::TYPE_GLOBAL_LOCK_QUERY;
    }


}