<?php

namespace Hyperf\Seata\Rm\DataSource\Sql\Struct;

use Hyperf\Seata\Rm\DataSource\Sql\Struct\Cache\MysqlTableMetaCache;
use PHPSQLParser\exceptions\UnsupportedFeatureException;

class TableMetaCacheFactory
{
    private static array $TABLE_META_CACHE_MAP = [];

    public static function getTableMetaCache(string $dbType): TableMetaCache
    {
        if (isset(self::$TABLE_META_CACHE_MAP[$dbType])) {
            return self::$TABLE_META_CACHE_MAP[$dbType];
        }
        switch ($dbType) {
            case 'MySql':
                $TABLE_META_CACHE_MAP[$dbType] = new MysqlTableMetaCache();
                return $TABLE_META_CACHE_MAP[$dbType];
            default:
                // TODO 优化报错
                throw new UnsupportedFeatureException('unsupported');
        }
    }
}