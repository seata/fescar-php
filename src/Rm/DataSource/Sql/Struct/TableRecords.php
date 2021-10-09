<?php

namespace Hyperf\Seata\Rm\DataSource\Sql\Struct;


class TableRecords
{

    /**
     * @var null|TableMeta
     */
    private $tableMeta;

    /**
     * @var string
     */
    private $tableName = '';

    /**
     * @var Row[]
     */
    private $rows = [];

    public function size()
    {
        return count($this->rows);
    }

    public function add(Row $row)
    {
        $this->rows[] = $row;
    }

    /**
     * Pk rows list.
     *
     * @return Field[]
     */
    public function pkRows(): array
    {
        $pkName = $this->getTableMeta()->getPkName();
        /** @var Field[] $pkRows */
        $pkRows = [];
        foreach ($this->rows as $row) {
            /** @var Field[] $fields */
            $fields = $row->getFields();
            foreach ($fields as $field) {
                if (strtolower($field->getName()) === strtolower($pkName)) {
                    $pkRows[] = $field;
                    break;
                }
            }
        }
        return $pkRows;
    }

    public function getTableMeta(): ?TableMeta
    {
        return $this->tableMeta;
    }

    /**
     * @return TableRecords
     */
    public function setTableMeta(TableMeta $tableMeta)
    {
        if ($this->tableMeta !== null) {
            throw new \RuntimeException('This action should never happen.');
        }
        $this->tableMeta = $tableMeta;
        $this->tableName = $tableMeta->getTableName();
        return $this;
    }

    public function getTableName(): string
    {
        return $this->tableName;
    }

    /**
     * @param string $tableName
     * @return TableRecords
     */
    public function setTableName($tableName)
    {
        $this->tableName = $tableName;
        return $this;
    }

    public function getRows(): array
    {
        return $this->rows;
    }

    /**
     * @param \Hyperf\Seata\Rm\DataSource\Sql\Struct\Row[] $rows
     * @return TableRecords
     */
    public function setRows($rows)
    {
        $this->rows = $rows;
        return $this;
    }

}