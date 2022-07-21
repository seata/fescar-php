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
use Hyperf\Seata\Core\Rpc\RpcContext;

class UndoLogDeleteRequest extends AbstractTransactionRequestToRM
{
    public const DEFAULT_SAVE_DAYS = 7;

    protected $branchType = BranchType::AT;

    /**
     * @var string
     */
    private $resourceId;

    private $saveDays = self::DEFAULT_SAVE_DAYS;

    public function handle(?RpcContext $rpcContext): ?AbstractTransactionResponse
    {
        $this->handler->handle($this);
        return null;
    }

    public function getTypeCode(): int
    {
        return MessageType::TYPE_RM_DELETE_UNDOLOG;
    }

    public function getResourceId(): string
    {
        return $this->resourceId;
    }

    public function setResourceId(string $resourceId): void
    {
        $this->resourceId = $resourceId;
    }

    public function getSaveDays(): int
    {
        return $this->saveDays;
    }

    public function setSaveDays(int $saveDays): void
    {
        $this->saveDays = $saveDays;
    }

    public function getBranchType(): int
    {
        return $this->branchType;
    }

    public function setBranchType(int $branchType): void
    {
        $this->branchType = $branchType;
    }
}
