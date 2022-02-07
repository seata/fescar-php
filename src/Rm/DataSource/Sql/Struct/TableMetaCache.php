<?php

namespace Hyperf\Seata\Rm\DataSource\Sql\Struct;

use Hyperf\Seata\Rm\PDOProxy;

interface TableMetaCache
{
    /**
     * Gets table meta.
     *
     * @return TableMeta the table meta
     */
    public function getTableMeta(PDOProxy $PDO, string $tableName, string $resourceId): TableMeta;

    /**
     * Clear the table meta cache
     */
    public function refresh(PDOProxy $PDO, string $resourceId);
}