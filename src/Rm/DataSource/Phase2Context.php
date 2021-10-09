<?php

namespace seata\src\Rm\DataSource;


class Phase2Context
{

    protected string $xid;
    protected int $branchId;
    protected string $resourceId;

    public function __construct(string $xid, int $branchId, string $resourceId)
    {
        $this->xid = $xid;
        $this->branchId = $branchId;
        $this->resourceId = $resourceId;
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

    public function getResourceId(): string
    {
        return $this->resourceId;
    }

    public function setResourceId(string $resourceId): static
    {
        $this->resourceId = $resourceId;
        return $this;
    }



}