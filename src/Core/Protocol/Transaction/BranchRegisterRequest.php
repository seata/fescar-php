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

use Hyperf\Seata\Core\Model\BranchType;
use Hyperf\Seata\Core\Protocol\MessageType;

class BranchRegisterRequest extends AbstractTransactionRequestToTC
{
    private string $xid = '';

    private int $branchType = BranchType::AT;

    private string $resourceId = '';

    private string $lockKey = '';

    private string $applicationData = '';

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

    public function getBranchType(): int
    {
        return $this->branchType;
    }

    /**
     * @return $this
     */
    public function setBranchType(int $branchType)
    {
        $this->branchType = $branchType;
        return $this;
    }

    public function getResourceId(): string
    {
        return $this->resourceId;
    }

    /**
     * @return $this
     */
    public function setResourceId(string $resourceId)
    {
        $this->resourceId = $resourceId;
        return $this;
    }

    public function getLockKey(): string
    {
        return $this->lockKey;
    }

    /**
     * @return $this
     */
    public function setLockKey(string $lockKey)
    {
        $this->lockKey = $lockKey;
        return $this;
    }

    public function getApplicationData(): string
    {
        return $this->applicationData;
    }

    /**
     * @return $this
     */
    public function setApplicationData(string $applicationData)
    {
        $this->applicationData = $applicationData;
        return $this;
    }

    public function getTypeCode(): int
    {
        return MessageType::TYPE_BRANCH_REGISTER;
    }
}
