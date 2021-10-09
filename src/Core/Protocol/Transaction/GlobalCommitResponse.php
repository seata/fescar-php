<?php

namespace Hyperf\Seata\Core\Protocol\Transaction;


use Hyperf\Seata\Core\Protocol\MessageType;

class GlobalCommitResponse extends AbstractGlobalEndResponse
{

    public function getTypeCode(): int
    {
        return MessageType::TYPE_GLOBAL_COMMIT_RESULT;
    }
}