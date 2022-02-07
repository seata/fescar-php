<?php

namespace Hyperf\Seata\Rm\DataSource\Sql\Struct\Cache;

use Hyperf\Seata\Exception\IllegalArgumentException;
use Hyperf\Seata\Exception\SQLException;
use Hyperf\Seata\Logger\StdoutLogger;
use Hyperf\Seata\Rm\DataSource\Sql\Struct\TableMeta;
use Hyperf\Seata\Rm\DataSource\Sql\Struct\TableMetaCache;
use Hyperf\Seata\Rm\PDOProxy;
use Hyperf\Utils\ApplicationContext;
use JetBrains\PhpStorm\ArrayShape;

abstract class AbstractTableMetaCache implements TableMetaCache
{
    private static int $CACHE_SIZE = 100000;

    private static int $EXPIRE_TIME = 900 * 1000;

    protected StdoutLogger $logger;

    public function __construct()
    {
        $container =  ApplicationContext::getContainer();
        $this->logger = $container->get(StdoutLogger::class);
    }


    #[ArrayShape(
        [
            'cache_key' => [
                'cache_time' => 'int',
                'cache_data' => TableMeta::class,
            ]
        ]
    )]
    private array $TABLE_META_CACHE = [];

    public function getTableMeta(PDOProxy $PDO, string $tableName, string $resourceId): TableMeta
    {
        if (empty($tableName)) {
            throw new IllegalArgumentException('TableMeta cannot be fetched without tableName');
        }

        $cacheKey = $this->getCacheKey($PDO, $tableName, $resourceId);
        if ($this->TABLE_META_CACHE[$cacheKey]['cache_time'] ?? 0 > time()) {
            return $this->TABLE_META_CACHE[$cacheKey]['cache_data'];
        }
        $result = $this->fetchSchema($PDO, $tableName);
        $this->TABLE_META_CACHE[$cacheKey]['cache_time'] = time() + self::$EXPIRE_TIME;
        $this->TABLE_META_CACHE[$cacheKey]['cache_data'] = $result;
        return $result;
    }

    public function refresh(PDOProxy $PDO, string $resourceId)
    {
        foreach ($this->TABLE_META_CACHE as $key => $value) {
            /** @var TableMeta $TableMeta */
            $tableMeta = $value['cache_data'];
            $cacheKey = $this->getCacheKey($PDO, $tableMeta->getTableName(), $resourceId);

            try {
                $tableMeta = $this->fetchSchema($PDO, $tableMeta->getTableName());
                $this->TABLE_META_CACHE[$cacheKey]['cache_time'] = time() + self::$EXPIRE_TIME;
                $this->TABLE_META_CACHE[$cacheKey]['cache_data'] = $tableMeta;
                $this->logger->debug('table meta change was found, update table meta cache automatically.');
            } catch (SQLException $e) {
                $this->logger->error("get table meta error:{$e->getMessage()}");
            }
        }
    }


    /**
     * generate cache key
     */
    protected abstract function getCacheKey(\PDO $pdo, string $tableName, string $resourceId):string;

    /**
     * get scheme from datasource and tableName
     */
    protected abstract function  fetchSchema(\PDO $pdo, string $tableName): TableMeta;

}