<?php

namespace Hyperf\Seata\Rm\DataSource\Sql\Struct\Cache;

use Hyperf\Seata\Rm\DataSource\Sql\SQLType;
use Hyperf\Seata\Rm\DataSource\Sql\Struct\ColumnMeta;
use Hyperf\Seata\Rm\DataSource\Sql\Struct\IndexMeta;
use Hyperf\Seata\Rm\DataSource\Sql\Struct\IndexType;
use Hyperf\Seata\Rm\DataSource\Sql\Struct\TableMeta;
use PDO;

class MysqlTableMetaCache extends AbstractTableMetaCache
{

    protected function getCacheKey(\PDO $pdo, string $tableName, string $resourceId): string
    {
        //remove single quote and separate it to catalogName and tableName
        $tableName = str_replace('`', '', $tableName);
        $tableNameWithCatalog = explode('\\.', $tableName);
        $defaultTableName = count($tableNameWithCatalog) > 1 ? $tableNameWithCatalog[1] : $tableNameWithCatalog[0];

        return sprintf('%s.%s', $resourceId, strtolower($defaultTableName));
    }

    protected function fetchSchema(\PDO $pdo, string $tableName): TableMeta
    {
        $tableMeta = new TableMeta();
        $this->getColumns($pdo, $tableName, $tableMeta);
        $this->getIndexs($pdo, $tableName, $tableMeta);
        return  $tableMeta;
    }

    public function getColumns(\PDO $pdo, string $tableName, TableMeta $tableMeta)
    {
        $sql = "SELECT `TABLE_CATALOG`, `TABLE_SCHEMA`, `TABLE_NAME`, `COLUMN_NAME`, `DATA_TYPE`, `CHARACTER_MAXIMUM_LENGTH`, " .
            "`NUMERIC_PRECISION`, `NUMERIC_SCALE`, `IS_NULLABLE`, `COLUMN_COMMENT`, `COLUMN_DEFAULT`, `CHARACTER_OCTET_LENGTH`, " .
            "`ORDINAL_POSITION`, `COLUMN_KEY`, `EXTRA`  FROM `INFORMATION_SCHEMA`.`COLUMNS` WHERE `TABLE_NAME` = :tableName";
        $res = $pdo->prepare($sql);
        $res->bindParam(':tableName', $tableName, PDO::PARAM_STR);
        $res->execute();
        $columns = $res->fetchAll();
        foreach ($columns as $column) {
            $columnMeta = new ColumnMeta();
            $columnMeta->setTableCat($column['TABLE_CATALOG']);
            $columnMeta->setTableSchemaName($column['TABLE_SCHEMA']);
            $columnMeta->setTableName($column['TABLE_NAME']);
            $columnMeta->setColumnName($column['COLUMN_NAME']);
            $columnMeta->setDataTypeName($column['DATA_TYPE']);
            $columnMeta->setDataType(SQLType::getSqlType($column['DATA_TYPE']));
            $columnMeta->setColumnSize($column['CHARACTER_MAXIMUM_LENGTH']);
            $columnMeta->setDecimalDigits($column['NUMERIC_PRECISION']);
            $columnMeta->setIsNullAble($column['IS_NULLABLE']);
            $columnMeta->setNumPrecRadix($column['NUMERIC_SCALE']);
            $columnMeta->setRemarks($column['COLUMN_COMMENT']);
            $columnMeta->setColumnDef($column['COLUMN_DEFAULT']);
            $columnMeta->setSqlDataType(0);
            $columnMeta->setSqlDatetimeSub(0);
            $columnMeta->setCharOctetLength($column['CHARACTER_OCTET_LENGTH']);
            $columnMeta->setOrdinalPosition($column['ORDINAL_POSITION']);
            $columnMeta->setIsAutoincrement($column['EXTRA']);
            $tableMeta->addAllColumns($columnMeta);
        }
        return $tableMeta;
    }

    public function getIndexs(\PDO $pdo, string $tableName, TableMeta $tableMeta)
    {
        $sql = "SELECT `INDEX_NAME`, `COLUMN_NAME`, `NON_UNIQUE`, `INDEX_TYPE`, `SEQ_IN_INDEX`, `COLLATION`, `CARDINALITY` " .
            "FROM `INFORMATION_SCHEMA`.`STATISTICS` WHERE `TABLE_NAME` = :tableName";
        $res = $pdo->prepare($sql);
        $res->bindParam(':tableName', $tableName, PDO::PARAM_STR);
        $res->execute();
        $indexs = $res->fetchAll();

        foreach ($indexs as $index) {
            $indexMeta = new IndexMeta();

            $indexMeta->setIndexName($index['INDEX_NAME']);
            $indexMeta->setNonUnique($index['NON_UNIQUE']);
            $indexMeta->setIndexQualifier($index['INDEX_QUALIFIER']);
            $indexMeta->setType($index['INDEX_TYPE']);
            $indexMeta->setOrdinalPosition($index['SEQ_IN_INDEX']);
            $indexMeta->setAscOrDesc($index['COLLATION']);
            $indexMeta->setCardinality($index['CARDINALITY']);

            $nonUnique = false;
            if ('yes' == strtolower($index['NON_UNIQUE']) || $index['NON_UNIQUE'] == '1') {
                $nonUnique = true;
		    }

            if ("primary" == strtolower($index['INDEX_NAME'])) {
                $indexMeta->setIndextype(IndexType::PRIMARY);
            } else if (!$nonUnique) {
                $indexMeta->setIndextype(IndexType::Unique);
            } else {
                $indexMeta->setIndextype(IndexType::Normal);
            }

            $indexMeta->setValues([$tableMeta->getAllColumnsWithName($index['COLUMN_NAME'])]);
            $tableMeta->addAllIndex($indexMeta);
        }
        return $tableMeta;
    }
}