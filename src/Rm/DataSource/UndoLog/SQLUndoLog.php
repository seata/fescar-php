<?php

namespace Hyperf\Seata\Rm\DataSource\UndoLog;

use Hyperf\Seata\Rm\DataSource\Sql\Struct\TableMeta;
use Hyperf\Seata\Rm\DataSource\Sql\Struct\TableRecords;

class SQLUndoLog
{

    /**
     * @var int
     * @see \Hyperf\Seata\Rm\DataSource\Sql\SQLType
     */
    private $sqlType;

    /**
     * @var string
     */
    private $tableName = '';

    /**
     * @var TableRecords
     */
    private $beforeImage;

    /**
     * @var TableRecords
     */
    private $afterImage;

    /**
     * Sets table meta.
     */
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

    /**
     * @param int $sqlType
     * @return SQLUndoLog
     */
    public function setSqlType($sqlType)
    {
        $this->sqlType = $sqlType;
        return $this;
    }

    public function getTableName(): string
    {
        return $this->tableName;
    }

    /**
     * @param string $tableName
     * @return SQLUndoLog
     */
    public function setTableName($tableName)
    {
        $this->tableName = $tableName;
        return $this;
    }

    public function getBeforeImage(): \Hyperf\Seata\Rm\DataSource\Sql\Struct\TableRecords
    {
        return $this->beforeImage;
    }

    /**
     * @param \Hyperf\Seata\Rm\DataSource\Sql\Struct\TableRecords $beforeImage
     * @return SQLUndoLog
     */
    public function setBeforeImage($beforeImage)
    {
        $this->beforeImage = $beforeImage;
        return $this;
    }

    public function getAfterImage(): \Hyperf\Seata\Rm\DataSource\Sql\Struct\TableRecords
    {
        return $this->afterImage;
    }

    /**
     * @param \Hyperf\Seata\Rm\DataSource\Sql\Struct\TableRecords $afterImage
     * @return SQLUndoLog
     */
    public function setAfterImage($afterImage)
    {
        $this->afterImage = $afterImage;
        return $this;
    }

}