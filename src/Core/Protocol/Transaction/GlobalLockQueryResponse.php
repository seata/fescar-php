<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
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
