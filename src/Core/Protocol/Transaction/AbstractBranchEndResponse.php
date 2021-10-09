<?php

namespace Hyperf\Seata\Core\Protocol\Transaction;


abstract class AbstractBranchEndResponse extends AbstractTransactionResponse
{

    /**
     * @var string
     */
    protected $xid = '';

    /**
     * @var string
     */
    protected $branchId;

    /**
     * @var int
     * @see \Hyperf\Seata\Core\Model\BranchStatus
     */
    protected $branchStatus;

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

    public function getBranchId(): int
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

    public function getBranchStatus(): int
    {
        return $this->branchStatus;
    }

    /**
     * @return $this
     */
    public function setBranchStatus(int $branchStatus)
    {
        $this->branchStatus = $branchStatus;
        return $this;
    }

}