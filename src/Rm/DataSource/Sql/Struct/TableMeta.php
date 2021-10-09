<?php

namespace Hyperf\Seata\Rm\DataSource\Sql\Struct;


use Hyperf\Seata\Exception\NotSupportYetException;

class TableMeta
{

    /**
     * @var string
     */
    private $tableName = '';

    /**
     * @var ColumnMeta[]
     */
    private $allColumns = [];

    /**
     * @var IndexMeta[]
     */
    private $allIndexes = [];

    /**
     * Gets pk name.
     *
     * @return the pk name
     */
    public function getPkName(): string
    {
        return $this->getPrimaryKeyOnlyName()[0] ?? '';
    }

    /**
     * Gets primary key only name.
     *
     * @return the primary key only name
     */
    public function getPrimaryKeyOnlyName(): array
    {
        $list = [];
        foreach ($this->getPrimaryKeyMap() as $entry) {
            $list[] = $entry;
        }
        return $list;
    }

    /**
     * Gets primary key map.
     *
     * @return [string, ColumnMeta][]
     */
    public function getPrimaryKeyMap(): array
    {
        $pk = [];
        foreach ($this->allIndexes as $index) {
            if ($index->getIndextype() === IndexType::PRIMARY) {
                foreach ($index->getValues() as $col) {
                    $pk[$col->getColumnName()] = $col;
                }
            }
        }

        if (count($pk) > 1) {
            throw new NotSupportYetException('Multi PK');
        }

        return $pk;
    }

    public function getTableName(): string
    {
        return $this->tableName;
    }

    /**
     * @param string $tableName
     * @return TableMeta
     */
    public function setTableName($tableName)
    {
        $this->tableName = $tableName;
        return $this;
    }

    public function getAllColumns(): array
    {
        return $this->allColumns;
    }

    /**
     * @param \Hyperf\Seata\Rm\DataSource\Sql\Struct\ColumnMeta[] $allColumns
     * @return TableMeta
     */
    public function setAllColumns($allColumns)
    {
        $this->allColumns = $allColumns;
        return $this;
    }

    public function getAllIndexes(): array
    {
        return $this->allIndexes;
    }

    /**
     * @param \Hyperf\Seata\Rm\DataSource\Sql\Struct\IndexMeta[] $allIndexes
     * @return TableMeta
     */
    public function setAllIndexes($allIndexes)
    {
        $this->allIndexes = $allIndexes;
        return $this;
    }

}