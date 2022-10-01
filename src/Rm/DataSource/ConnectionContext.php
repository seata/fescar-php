<?php

declare(strict_types=1);
/**
 * Copyright 2019-2022 Seata.io Group.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 */
namespace Hyperf\Seata\Rm\DataSource;

use Hyperf\Seata\Exception\ShouldNeverHappenException;
use Hyperf\Seata\Rm\DataSource\Undo\SQLUndoLog;
use Hyperf\Context\Context;

class ConnectionContext
{
    private ?string $xid = null;

    private ?int $branchId = null;

    private bool $globalLockRequire = false;

    private bool $autoCommitChanged = false;

    // Table and primary key should not be duplicated
    private array $lockKeysBuffer = [];

    private array $sqlUndoItemsBuffer = [];

    // todo savepoint

    public function appendLockKey(string $lockKey)
    {
//        Context::set('seata:lockKeysBuffer', $lockKey);
        $this->lockKeysBuffer[$lockKey] = $lockKey;
    }

    public function appendUndoItem(SQLUndoLog $sqlUndoLog)
    {
        $sqlUndoItemsBuffer = Context::get('seata:sqlUndoItemsBuffer', []);
        $sqlUndoItemsBuffer[] = $sqlUndoLog;
        Context::set('seata:sqlUndoItemsBuffer', $sqlUndoItemsBuffer);
//        $this->sqlUndoItemsBuffer[] = $sqlUndoLog;
    }

    public function getXid(): ?string
    {
        return Context::get('seata:xid');
//        return $this->xid;
    }

    public function setXid(string $xid): static
    {
        Context::set('seata:xid', $xid);
//        $this->xid = $xid;
        return $this;
    }

    public function getBranchId(): ?int
    {
        return Context::get('seata:branchId');
//        return $this->branchId;
    }

    public function setBranchId(int $branchId): static
    {
        Context::set('seata:branchId', $branchId);
//        $this->branchId = $branchId;
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
        return (bool) $this->getXid();
    }

    public function isBranchRegistered(): bool
    {
        return (bool) $this->getBranchId();
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
        return ! empty(Context::get('seata:sqlUndoItemsBuffer'));
//        return ! empty($this->sqlUndoItemsBuffer);
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
//        $this->lockKeysBuffer = [];
//        $this->sqlUndoItemsBuffer = [];
        Context::set('seata:sqlUndoItemsBuffer', []);
        Context::set('seata:branchId', null);
        Context::set('seata:xid', null);
        $this->autoCommitChanged = false;
    }

    public function buildLockKeys(): ?string
    {
        if (empty($this->lockKeysBuffer)) {
            return null;
        }
        return implode(';', $this->lockKeysBuffer);
    }

    public function getUndoItms(): array
    {
        return Context::get('seata:sqlUndoItemsBuffer');
//        return $this->sqlUndoItemsBuffer;
    }
}
