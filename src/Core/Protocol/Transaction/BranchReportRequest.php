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
namespace Hyperf\Seata\Core\Protocol\Transaction;

use Hyperf\Seata\Core\Model\BranchType;
use Hyperf\Seata\Core\Protocol\MessageType;

class BranchReportRequest extends AbstractTransactionRequestToTC
{
    /**
     * @var string
     */
    private $xid;

    /**
     * @var string
     */
    private $branchId;

    /**
     * @var string
     */
    private $resourceId;

    /**
     * @var int
     * @see \Hyperf\Seata\Core\Model\BranchStatus
     */
    private $status;

    /**
     * @var string
     */
    private $applicationData;

    /**
     * @var int
     */
    private $branchType = BranchType::AT;

    public function getTypeCode(): int
    {
        return MessageType::TYPE_BRANCH_STATUS_REPORT;
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

    public function getBranchId(): string
    {
        return $this->branchId;
    }

    /**
     * @return $this
     */
    public function setBranchId(string $branchId)
    {
        $this->branchId = $branchId;
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

    public function getStatus(): int
    {
        return $this->status;
    }

    /**
     * @return $this
     */
    public function setStatus(int $status)
    {
        $this->status = $status;
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
}
