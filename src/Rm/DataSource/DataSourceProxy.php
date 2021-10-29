<?php

namespace Hyperf\Seata\Rm\DataSource;


use Hyperf\Seata\Core\Context\RootContext;
use Hyperf\Seata\Core\Model\BranchType;
use Hyperf\Seata\Core\Model\Resource;
use Hyperf\Seata\Logger\LoggerFactory;
use Hyperf\Seata\Logger\LoggerInterface;
use Hyperf\Seata\Rm\DefaultResourceManager;

class DataSourceProxy extends AbstractDataSourceProxy implements Resource
{
    public string $resourceGroupId = 'DEFAULT';
    protected string $resourceId;
    protected LoggerInterface $logger;
    protected ConnectionProxyInterface $connection;
    protected DefaultResourceManager $defaultResourceManager;

    public function __construct(LoggerFactory $loggerFactory, DefaultResourceManager $defaultResourceManager)
    {
        $this->logger = $loggerFactory->create(static::class);
        $this->defaultResourceManager = $defaultResourceManager;
    }

    public function init(ConnectionProxyInterface $connection, string $resourceGroupId = null){
        $this->resourceGroupId = $resourceGroupId;
        $this->connection = $connection;
        $this->defaultResourceManager->registerResource($this);

        // @todo 补上 TableMetaChecker 逻辑

        // Set the default branch type to BranchType::AT in the RootContext
        RootContext::setDefaultBranchType($this->getBranchType());
    }

    public function getConnectin(): ConnectionProxyInterface
    {
        return $this->connection;
    }

    public function getDbType(): string
    {
        return 'mysql';
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
}