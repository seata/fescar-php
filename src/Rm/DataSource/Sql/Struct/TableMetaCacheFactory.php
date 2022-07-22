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
