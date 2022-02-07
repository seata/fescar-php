<?php

namespace Hyperf\Seata\Rm\DataSource\Sql\Struct;


use Hyperf\Seata\Exception\NotSupportYetException;

class TableMeta
{

    private string $tableName = '';

    /**
     * @var ColumnMeta[]
     */
    private array $allColumns = [];

    /**
     * @var IndexMeta[]
     */
    private array $allIndexes = [];

    /**
     * Gets pk name.
     *
     * @return string the pk name
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

    public function getAllColumnsWithName(string $colName): ColumnMeta
    {
        return $this->allColumns[$colName];
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

    public function addAllColumns(ColumnMeta $columnMeta): static
    {
        $this->allColumns[$columnMeta->getColumnName()] = $columnMeta;
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

    public function addAllIndex(IndexMeta $indexMeta): static
    {
        $this->allIndexes[] = $indexMeta;
        return $this;
    }

}