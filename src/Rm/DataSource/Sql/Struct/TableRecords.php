<?php

declare(strict_types=1);
/**
 * Copyright 2019-2022 Seata.io Group.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 */
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

    /**
     * @return Field[]
     */
    public function pkFields(): array
    {
        $pkRows = [];
        foreach ($this->getRows() as $row) {
            foreach ($row->getFields() as $field) {
                if (strtolower($field->getName()) == strtolower($this->getTableMeta()->getPkName())) {
                    $pkRows[] = $field;
                }
            }
        }
        return $pkRows;
    }
}
