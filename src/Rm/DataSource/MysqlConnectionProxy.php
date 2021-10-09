<?php

namespace Hyperf\Seata\Rm\DataSource;


use Hyperf\Database\ConnectionInterface;
use Hyperf\Database\MySqlConnection;
use Hyperf\Seata\Core\Model\BranchType;
use Hyperf\Seata\Core\Model\Resource;
use Hyperf\Seata\Core\Model\ResourceManager;
use Hyperf\Utils\ApplicationContext;

class MysqlConnectionProxy extends MySqlConnection implements Resource
{

    /**
     * @var string
     */
    protected $resourceId = '';

    /**
     * @var string
     */
    protected $resourceGroupId = '';

    private const DEFAULT_RESOURCE_GROUP_ID = 'DEFAULT';

    public function __construct($pdo, $database = '', $tablePrefix = '', array $config = [])
    {
        parent::__construct($pdo, $database, $tablePrefix, $config);
        $this->resourceGroupId = self::DEFAULT_RESOURCE_GROUP_ID;
        $this->resourceId = $this->generateResourceId($config);
        ApplicationContext::getContainer()->get(ResourceManager::class)->registerResource($this);
    }

    public function getResourceGroupId(): string
    {
        return $this->resourceGroupId;
    }

    public function getResourceId(): string
    {
        return $this->resourceId;
    }

    public function getBranchType(): int
    {
        return BranchType::AT;
    }

    /**
     * @return $this
     */
    public function setResourceGroupId(string $resourceGroupId)
    {
        $this->resourceGroupId = $resourceGroupId;
        return $this;
    }

    protected function generateResourceId(array $config): string
    {
        $driver = 'pdo';
        $engine = $config['driver'] ?? 'mysql';
        $host = $config['host'] ?? null;
        $port = (int) ($config['port'] ?? 3306);
        $database = $config['database'] ?? null;
        $resourceId = sprintf('%s:%s://%s:%d/%s', $driver, $engine, $host, $port, $database);
        return $resourceId;
    }
}