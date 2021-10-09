<?php

namespace Hyperf\Seata\Core\Protocol\Transaction;


use Hyperf\Seata\Core\Protocol\MessageType;

class GlobalLockQueryResponse extends AbstractTransactionResponse
{

    /**
     * @var bool
     */
    protected $lockable = false;

    public function getTypeCode(): int
    {
        return MessageType::TYPE_GLOBAL_LOCK_QUERY_RESULT;
    }

    public function isLockable(): bool
    {
        return $this->lockable;
    }

    /**
     * @return $this
     */
    public function setLockable(bool $lockable)
    {
        $this->lockable = $lockable;
        return $this;
    }
}