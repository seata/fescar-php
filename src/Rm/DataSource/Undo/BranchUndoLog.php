<?php

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
        'xid' => "string",
        'branchId' => "int",
        'sqlUndoLogs' => "array",
        'serialVersionUID' => "int"
    ])] public function toArray(): array
    {
        return [
            'xid' => $this->getXid(),
            'branchId' => $this->getBranchId(),
            'sqlUndoLogs' => $this->getSqlUndoLogs(),
            'serialVersionUID' => $this->getSerialVersionUID(),
        ];
    }
}