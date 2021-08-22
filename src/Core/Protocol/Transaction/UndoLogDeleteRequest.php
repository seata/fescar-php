<?php


namespace Hyperf\Seata\Core\Protocol\Transaction;


use Hyperf\Seata\Core\Model\BranchType;
use Hyperf\Seata\Core\Protocol\MessageType;
use Hyperf\Seata\Core\Rpc\RpcContext;

class UndoLogDeleteRequest extends AbstractTransactionRequestToRM
{

    /**
     * @var string
     */
    private $resourceId;

    public const DEFAULT_SAVE_DAYS = 7;

    private $saveDays = self::DEFAULT_SAVE_DAYS;

    protected $branchType = BranchType::AT;

    public function handle(RpcContext $rpcContext): ?AbstractTransactionResponse
    {
        $this->handler->handle($this);
        return null;
    }

    public function getTypeCode(): int
    {
        return MessageType::TYPE_RM_DELETE_UNDOLOG;
    }

    /**
     * @return string
     */
    public function getResourceId(): string
    {
        return $this->resourceId;
    }

    /**
     * @param string $resourceId
     */
    public function setResourceId(string $resourceId): void
    {
        $this->resourceId = $resourceId;
    }

    /**
     * @return int
     */
    public function getSaveDays(): int
    {
        return $this->saveDays;
    }

    /**
     * @param int $saveDays
     */
    public function setSaveDays(int $saveDays): void
    {
        $this->saveDays = $saveDays;
    }

    /**
     * @return int
     */
    public function getBranchType(): int
    {
        return $this->branchType;
    }

    /**
     * @param int $branchType
     */
    public function setBranchType(int $branchType): void
    {
        $this->branchType = $branchType;
    }


}