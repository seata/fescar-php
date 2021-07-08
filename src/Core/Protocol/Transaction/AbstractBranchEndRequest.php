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
use Hyperf\Seata\Core\Rpc\RpcContext;

abstract class AbstractBranchEndRequest extends AbstractTransactionRequestToRM
{
    /**
     * @var string
     */
    protected $xid;

    /**
     * @var string
     */
    protected $branchId;

    /**
     * @var int
     */
    protected $branchType = BranchType::AT;

    /**
     * @var string
     */
    protected $resourceId;

    /**
     * @var string
     */
    protected $applicationData;

    public function handle(RpcContext $rpcContext): AbstractTransactionResponse
    {
        return $this->handler->handle($this);
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
}
