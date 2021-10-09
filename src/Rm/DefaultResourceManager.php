<?php

namespace Hyperf\Seata\Rm;

use Hyperf\Contract\ContainerInterface;
use Hyperf\Database\Connection;
use Hyperf\Seata\Core\Model\Resource;
use Hyperf\Seata\Core\Model\ResourceManager;
use Hyperf\Seata\Exception\SeataException;
use Hyperf\Seata\Rm\DataSource\DataSourceManager;
use Hyperf\Seata\Rm\DataSource\MysqlConnectionProxy;

class DefaultResourceManager implements ResourceManager
{

    /**
     * All resource managers
     *
     * @var \Hyperf\Seata\Core\Model\ResourceManager[]
     */
    protected array $resourceManagers = [];
    protected ContainerInterface $container;

    public function __construct(ContainerInterface $container)
    {
        $this->initResourceManagers();
        $this->container = $container;
    }

    protected function initResourceManagers(): void
    {
//        Connection::resolverFor('mysql', function ($connection, string $database, string $prefix, array $config) {
//            return new MysqlConnectionProxy($connection, $database, $prefix, $config);
//        });
        $this->resourceManagers = [
            $this->container->get(DataSourceManager::class),
        ];
    }


    public function registerResource(Resource $resource): void
    {
        $this->getResourceManager($resource->getBranchType())->registerResource($resource);
    }

    public function unregisterResource(Resource $resource): void
    {
        $this->getResourceManager($resource->getBranchType())->unregisterResource($resource);
    }

    public function getManagedResources(): array
    {
        $resources = [];
        $resourceManagers = $this->resourceManagers;
        foreach ($resourceManagers as $resourceManager) {
            $managedResources = $resourceManager->getManagedResources();
            $resources = array_merge($resources, $managedResources);
        }
        return $resources;
    }

    /**
     * Get ResourceManager by branch Type
     */
    public function getResourceManager(int $branchType): ResourceManager
    {
        if (isset($this->resourceManagers[$branchType])) {
            throw new SeataException('No ResourceManager for BranchType:' + $branchType);
        }
        return $this->resourceManagers[$branchType];
    }

    public function getBranchType(): int
    {
        throw new SeataException("DefaultResourceManager isn't a real ResourceManager");
    }

    public function branchCommit(
        int $branchType,
        string $xid,
        int $branchId,
        string $resourceId,
        string $applicationData
    ): int {
        return $this->getResourceManager($branchType)
            ->branchCommit($branchType, $xid, $branchId, $resourceId, $applicationData);
    }

    public function branchRollback(
        int $branchType,
        string $xid,
        int $branchId,
        string $resourceId,
        string $applicationData
    ): int {
        return $this->getResourceManager($branchType)
            ->branchRollback($branchType, $xid, $branchId, $resourceId, $applicationData);
    }

    public function branchRegister(
        int $branchType,
        string $resourceId,
        string $clientId,
        string $xid,
        string $applicationData,
        string $lockKeys
    ): int {
        return $this->getResourceManager($branchType)
            ->branchRegister($branchType, $resourceId, $clientId, $xid, $applicationData, $lockKeys);
    }

    public function branchReport(
        int $branchType,
        string $xid,
        int $branchId,
        int $status,
        string $applicationData
    ): void {
        $this->getResourceManager($branchType)->branchReport($branchType, $xid, $branchId, $status, $applicationData);
    }

    public function lockQuery(int $branchType, string $resourceId, string $xid, string $lockKeys): bool
    {
        return $this->getResourceManager($branchType)->lockQuery($branchType, $resourceId, $xid, $lockKeys);
    }
}