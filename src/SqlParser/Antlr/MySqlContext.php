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

class MySqlContext
{
    /**
     * Table Name.
     */
    public string $tableName;

    /**
     * Table Alias.
     */
    public string $tableAlias;

    /**
     * Number of inserts.
     */
    public int $insertRows;

    /**
     * Query column name collection.
     */
    public array $queryColumnNames = [];

    /**
     * Conditional query column name collection.
     */
    public array $queryWhereColumnNames = [];

    /**
     * Conditional query column name corresponding value collection.
     */
    public array $queryWhereValColumnNames = [];

    /**
     * Query column name collection.
     */
    public array $insertColumnNames = [];

    /**
     * Insert the value set corresponding to the column name.
     */
    public array $insertForValColumnNames = [];

    /**
     * Delete condition column name set.
     */
    public array $deleteForWhereColumnNames = [];

    /**
     * Conditional delete column name object value collection.
     */
    public array $deleteForWhereValColumnNames = [];

    /**
     * Conditional update condition column name object collection.
     */
    public array $updateForWhereColumnNames = [];

    /**
     * Conditional update column name object value collection.
     */
    public array $updateForWhereValColumnNames = [];

    /**
     * Update column name object value collection.
     */
    public array $updateFoColumnNames = [];

    /**
     * Update object value collection.
     */
    public array $updateForValues = [];

    /**
     * sql object information collection.
     */
    public array $sqlInfos = [];

    /**
     * Where condition.
     */
    private string $whereCondition;

    /**
     * originalSQL.
     */
    private string $originalSQL;

    public function addSqlInfo(SQL $sql)
    {
        $this->sqlInfos[] = $sql;
    }

    public function addForInsertColumnName(string $columnName)
    {
        $sql = new SQL();
        $sql->setInsertColumnName($columnName);
        $this->insertColumnNames[] = $sql;
    }

    public function addForInsertValColumnName(array $columnName)
    {
        $this->insertForValColumnNames[] = $columnName;
    }

    public function addQueryColumnNames(string $columnName)
    {
        $sql = new SQL();
        $sql->setColumnName($columnName);
        $this->queryColumnNames[] = $sql;
    }

    public function addQueryWhereColumnNames(string $columnName)
    {
        $sql = new SQL();
        $sql->setQueryWhereColumnName($columnName);
        $this->queryWhereColumnNames[] = $sql;
    }

    public function addQueryWhereValColumnNames(string $columnName)
    {
        $sql = new SQL();
        $sql->setQueryWhereValColumnName($columnName);
        $this->queryWhereValColumnNames[] = $sql;
    }

    public function addDeleteWhereColumnNames(string $columnName)
    {
        $sql = new SQL();
        $sql->setDeleteWhereColumnName($columnName);
        $this->deleteForWhereColumnNames[] = $sql;
    }

    public function addDeleteWhereValColumnNames(string $columnName)
    {
        $sql = new SQL();
        $sql->setDeleteWhereValColumnName($columnName);
        $this->deleteForWhereValColumnNames[] = $sql;
    }

    public function addUpdateWhereValColumnNames(string $columnName)
    {
        $sql = new SQL();
        $sql->setUpdateWhereValColumnName($columnName);
        $this->updateForWhereValColumnNames[] = $sql;
    }

    public function addUpdateWhereColumnNames(string $columnName)
    {
        $sql = new SQL();
        $sql->setUpdateWhereColumnName($columnName);
        $this->updateForWhereColumnNames[] = $sql;
    }

    public function addUpdateColumnNames(string $columnName)
    {
        $sql = new SQL();
        $sql->setUpdateColumn($columnName);
        $this->updateFoColumnNames[] = $sql;
    }

    public function addUpdateValues(string $columnName)
    {
        $sql = new SQL();
        $sql->setUpdateValue($columnName);
        $this->updateForValues[] = $sql;
    }

    public function getQueryColumnNames(): array
    {
        return $this->queryColumnNames;
    }

    public function getQueryWhereColumnNames(): array
    {
        return $this->queryWhereColumnNames;
    }

    public function getQueryWhereValColumnNames(): array
    {
        return $this->queryWhereValColumnNames;
    }

    public function getInsertColumnNames(): array
    {
        return $this->insertColumnNames;
    }

    public function getInsertForValColumnNames(): array
    {
        return $this->insertForValColumnNames;
    }

    public function getDeleteForWhereColumnNames(): array
    {
        return $this->deleteForWhereColumnNames;
    }

    public function getDeleteForWhereValColumnNames(): array
    {
        return $this->deleteForWhereValColumnNames;
    }

    public function getUpdateForWhereColumnNames(): array
    {
        return $this->updateForWhereColumnNames;
    }

    public function getUpdateForWhereValColumnNames(): array
    {
        return $this->updateForWhereValColumnNames;
    }

    public function getUpdateFoColumnNames(): array
    {
        return $this->updateFoColumnNames;
    }

    public function getUpdateForValues(): array
    {
        return $this->updateForValues;
    }

    public function getTableName(): string
    {
        return $this->tableName;
    }

    public function setTableName(string $tableName)
    {
        $this->tableName = $tableName;
    }

    public function getInsertRows(): int
    {
        return $this->insertRows;
    }

    public function setInsertRows(int $insertRows)
    {
        $this->insertRows = $insertRows;
    }

    public function getWhereCondition(): string
    {
        return $this->whereCondition;
    }

    public function setWhereCondition(string $whereCondition)
    {
        $this->whereCondition = $whereCondition;
    }

    public function getSqlInfos(): array
    {
        return $this->sqlInfos;
    }

    public function getOriginalSQL(): string
    {
        return $this->originalSQL;
    }

    public function setOriginalSQL(string $originalSQL)
    {
        $this->originalSQL = $originalSQL;
    }

    public function setTableAlias(string $tableAlias)
    {
        $this->tableAlias = $tableAlias;
    }

    public function getTableAlias(): string
    {
        return $this->tableAlias;
    }
}
