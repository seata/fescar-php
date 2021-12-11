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
namespace Hyperf\Seata\SqlParser\Antlr;

class SQL
{
    private string $columnName;

    private string $tableName;

    private string $queryWhereValColumnName;

    private string $queryWhereColumnName;

    private string $insertColumnName;

    private string $deleteWhereValColumnName;

    private string $deleteWhereColumnName;

    private string $updateWhereValColumnName;

    private string $updateWhereColumnName;

    private string $updateColumn;

    private string $updateValue;

    private int $sqlType;

    private string $sql;

    public function getColumnName(): string
    {
        return $this->columnName;
    }

    public function setColumnName(string $columnName)
    {
        $this->columnName = $columnName;
    }

    public function getTableName(): string
    {
        return $this->tableName;
    }

    public function setTableName(string $tableName)
    {
        $this->tableName = $tableName;
    }

    public function getQueryWhereValColumnName(): string
    {
        return $this->queryWhereValColumnName;
    }

    public function setQueryWhereValColumnName(string $queryWhereValColumnName)
    {
        $this->queryWhereValColumnName = $queryWhereValColumnName;
    }

    public function getQueryWhereColumnName(): string
    {
        return $this->queryWhereColumnName;
    }

    public function setQueryWhereColumnName(string $queryWhereColumnName)
    {
        $this->queryWhereColumnName = $queryWhereColumnName;
    }

    public function getInsertColumnName(): string
    {
        return $this->insertColumnName;
    }

    public function setInsertColumnName(string $insertColumnName)
    {
        $this->insertColumnName = $insertColumnName;
    }

    public function getDeleteWhereValColumnName(): string
    {
        return $this->deleteWhereValColumnName;
    }

    public function setDeleteWhereValColumnName(string $deleteWhereValColumnName)
    {
        $this->deleteWhereValColumnName = $deleteWhereValColumnName;
    }

    public function getDeleteWhereColumnName(): string
    {
        return $this->deleteWhereColumnName;
    }

    public function setDeleteWhereColumnName(string $deleteWhereColumnName)
    {
        $this->deleteWhereColumnName = $deleteWhereColumnName;
    }

    public function getUpdateWhereValColumnName(): string
    {
        return $this->updateWhereValColumnName;
    }

    public function setUpdateWhereValColumnName(string $updateWhereValColumnName)
    {
        $this->updateWhereValColumnName = $updateWhereValColumnName;
    }

    public function getUpdateWhereColumnName(): string
    {
        return $this->updateWhereColumnName;
    }

    public function setUpdateWhereColumnName(string $updateWhereColumnName)
    {
        $this->updateWhereColumnName = $updateWhereColumnName;
    }

    public function getUpdateColumn(): string
    {
        return $this->updateColumn;
    }

    public function setUpdateColumn(string $updateColumn)
    {
        $this->updateColumn = $updateColumn;
    }

    public function getUpdateValue(): string
    {
        return $this->updateValue;
    }

    public function setUpdateValue(string $updateValue)
    {
        $this->updateValue = $updateValue;
    }

    public function getSqlType(): int
    {
        return $this->sqlType;
    }

    public function setSqlType(int $sqlType)
    {
        $this->sqlType = $sqlType;
    }

    public function getSql(): string
    {
        return $this->sql;
    }

    public function setSql(string $sql)
    {
        $this->sql = $sql;
    }
}
