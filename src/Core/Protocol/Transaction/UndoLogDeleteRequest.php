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
