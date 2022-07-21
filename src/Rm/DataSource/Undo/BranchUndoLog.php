<?php

declare(strict_types=1);
/**
 * Copyright 1999-2022 Seata.io Group.
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
namespace Hyperf\Seata\Rm\DataSource\Undo;

use Hyperf\Utils\Contracts\Arrayable;
use JetBrains\PhpStorm\ArrayShape;
use JetBrains\PhpStorm\Pure;

class BranchUndoLog implements Arrayable
{
    protected int $serialVersionUID = PHP_INT_MAX;

    protected string $xid;

    protected int $branchId;

    protected array $sqlUndoLogs = [];

    public function getSerialVersionUID(): int
    {
        return $this->serialVersionUID;
    }

    public function setSerialVersionUID(int $serialVersionUID): static
    {
        $this->serialVersionUID = $serialVersionUID;
        return $this;
    }

    public function getXid(): string
    {
        return $this->xid;
    }

    public function setXid(string $xid): static
    {
        $this->xid = $xid;
        return $this;
    }

    public function getBranchId(): int
    {
        return $this->branchId;
    }

    public function setBranchId(int $branchId): static
    {
        $this->branchId = $branchId;
        return $this;
    }

    public function getSqlUndoLogs(): array
    {
        return $this->sqlUndoLogs;
    }

    public function setSqlUndoLogs(array $sqlUndoLogs): static
    {
        $this->sqlUndoLogs = $sqlUndoLogs;
        return $this;
    }

    #[Pure]
    #[ArrayShape([
        'xid' => 'string',
        'branchId' => 'int',
        'sqlUndoLogs' => 'array',
        'serialVersionUID' => 'int',
    ])]
 public function toArray(): array
 {
     return [
         'xid' => $this->getXid(),
         'branchId' => $this->getBranchId(),
         'sqlUndoLogs' => $this->getSqlUndoLogs(),
         'serialVersionUID' => $this->getSerialVersionUID(),
     ];
 }
}
