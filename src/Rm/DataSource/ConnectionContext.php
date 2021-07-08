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
namespace Hyperf\Seata\Rm\DataSource;

class ConnectionContext
{
    private $xid = '';

    /**
     * @var int
     */
    private $branchId;

    private $globalLockRequire = false;

    //table and primary key should not be duplicated
    private $lockKeysBuffer = [];

    private $sqlUndoItemsBuffer = [];

    /**
     * Append lock key.
     *
     * @param $lockKey the lock key
     */
    public function appendLockKey(string $lockKey)
    {
        $this->lockKeysBuffer[$lockKey] = $lockKey;
    }

    /**
     * Append undo item.
     *
     * @param sqlUndoLog the sql undo log
     */
    public function appendUndoItem(SQLUndoLog $sqlUndoLog)
    {
        $this->sqlUndoItemsBuffer[] = $sqlUndoLog;
    }

    public function getXid(): string
    {
        return $this->xid;
    }

    /**
     * @return $this
     */
    public function setXid(string $xid)
    {
        $this->xid = $xid;
        return $this;
    }

    public function getBranchId(): int
    {
        return $this->branchId;
    }

    /**
     * @return $this
     */
    public function setBranchId(int $branchId)
    {
        $this->branchId = $branchId;
        return $this;
    }

    public function isGlobalLockRequire(): bool
    {
        return $this->globalLockRequire;
    }

    /**
     * @return $this
     */
    public function setGlobalLockRequire(bool $globalLockRequire)
    {
        $this->globalLockRequire = $globalLockRequire;
        return $this;
    }
}
