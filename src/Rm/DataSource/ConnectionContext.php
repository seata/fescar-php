<?php

namespace Hyperf\Seata\Rm\DataSource;


use Hyperf\Seata\Exception\ShouldNeverHappenException;
use Hyperf\Seata\Rm\DataSource\Undo\SQLUndoLog;

class ConnectionContext
{

    private ?string $xid;
    private ?int $branchId;
    private bool $globalLockRequire = false;
    private bool $autoCommitChanged = false;
    // Table and primary key should not be duplicated
    private array $lockKeysBuffer = [];
    private array $sqlUndoItemsBuffer = [];

    // todo savepoint

    public function appendLockKey(string $lockKey)
    {
        $this->lockKeysBuffer[$lockKey] = $lockKey;
    }

    public function appendUndoItem(SQLUndoLog $sqlUndoLog)
    {
        $this->sqlUndoItemsBuffer[] = $sqlUndoLog;
    }

    public function getXid(): ?string
    {
        return $this->xid;
    }

    public function setXid(string $xid): static
    {
        $this->xid = $xid;
        return $this;
    }

    public function getBranchId(): ?int
    {
        return $this->branchId;
    }

    public function setBranchId(int $branchId): static
    {
        $this->branchId = $branchId;
        return $this;
    }

    public function isGlobalLockRequire(): bool
    {
        return $this->globalLockRequire;
    }

    public function setGlobalLockRequire(bool $globalLockRequire): static
    {
        $this->globalLockRequire = $globalLockRequire;
        return $this;
    }

    public function inGlobalTransaction(): bool
    {
        return (bool)$this->xid;
    }

    public function bind(string $xid): void
    {
        if (! $this->inGlobalTransaction()) {
            $this->setXid($xid);
        } elseif ($xid !== $this->getXid()) {
            throw new ShouldNeverHappenException();
        }
    }

    public function hasUndoLog(): bool
    {
        return ! empty($this->sqlUndoItemsBuffer);
    }

    public function hasLockKey(): bool
    {
        return ! empty($this->lockKeysBuffer);
    }

    public function isAutoCommitChanged(): bool
    {
        return $this->autoCommitChanged;
    }

    public function setAutoCommitChanged(bool $autoCommitChanged): static
    {
        $this->autoCommitChanged = $autoCommitChanged;
        return $this;
    }

    public function reset(): void
    {
        $this->xid = null;
        $this->branchId = null;
        $this->globalLockRequire = false;
        $this->lockKeysBuffer = [];
        $this->sqlUndoItemsBuffer = [];
        $this->autoCommitChanged = false;
    }

    public function buildLockKeys(): ?string
    {
        if (empty($this->lockKeysBuffer)) {
            return null;
        } else {
            return implode(';', $this->lockKeysBuffer);
        }
    }

    public function getUndoItms(): array
    {
        return $this->sqlUndoItemsBuffer;
    }

}