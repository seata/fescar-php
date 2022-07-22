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
namespace Hyperf\Seata\Core\Protocol\Transaction;

abstract class AbstractBranchEndResponse extends AbstractTransactionResponse
{
    protected string $xid = '';

    protected ?int $branchId = null;

    /**
     * @see \Hyperf\Seata\Core\Model\BranchStatus
     */
    protected ?int $branchStatus = null;

    public function __toString(): string
    {
        return sprintf(
            'xid=%s,branchId=%s,branchStatus=%s,result code =%s,getMsg =%s',
            $this->xid,
            $this->branchId,
            $this->branchStatus,
            $this->getResultCode(),
            $this->getMessage()
        );
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

    public function getBranchId(): ?int
    {
        return $this->branchId;
    }

    public function setBranchId(int $branchId): static
    {
        $this->branchId = $branchId;
        return $this;
    }

    public function getBranchStatus(): int
    {
        return $this->branchStatus;
    }

    public function setBranchStatus(int $branchStatus): static
    {
        $this->branchStatus = $branchStatus;
        return $this;
    }
}
