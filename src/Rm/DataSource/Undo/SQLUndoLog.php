<?php

namespace Hyperf\Seata\Rm\DataSource\Undo;

use Hyperf\Seata\Rm\DataSource\Sql\Struct\TableMeta;
use Hyperf\Seata\Rm\DataSource\Sql\Struct\TableRecords;

class SQLUndoLog
{

    /**
     * @see \Hyperf\Seata\Rm\DataSource\Sql\SQLType
     */
    private int $sqlType;

    private string $tableName = '';

    private TableRecords $beforeImage;

    private TableRecords $afterImage;

    public function setTableMeta(TableMeta $tableMeta): void
    {
        if ($this->beforeImage !== null) {
            $this->beforeImage->setTableMeta($tableMeta);
        }
        if ($this->afterImage !== null) {
            $this->afterImage->setTableMeta($tableMeta);
        }
    }

    public function getSqlType(): int
    {
        return $this->sqlType;
    }

    public function setSqlType(int $sqlType): static
    {
        $this->sqlType = $sqlType;
        return $this;
    }

    public function getTableName(): string
    {
        return $this->tableName;
    }

    public function setTableName(string $tableName): static
    {
        $this->tableName = $tableName;
        return $this;
    }

    public function getBeforeImage(): TableRecords
    {
        return $this->beforeImage;
    }

    public function setBeforeImage(TableRecords $beforeImage): static
    {
        $this->beforeImage = $beforeImage;
        return $this;
    }

    public function getAfterImage(): TableRecords
    {
        return $this->afterImage;
    }

    public function setAfterImage(TableRecords $afterImage): static
    {
        $this->afterImage = $afterImage;
        return $this;
    }

}