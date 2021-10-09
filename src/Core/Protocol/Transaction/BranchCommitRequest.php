<?php

namespace Hyperf\Seata\Core\Protocol\Transaction;


use Hyperf\Seata\Core\Protocol\MessageType;

class BranchCommitRequest extends AbstractBranchEndRequest
{
    public function getTypeCode(): int
    {
        return MessageType::TYPE_BRANCH_COMMIT;
    }
}