<?php

namespace Hyperf\Seata\Rm;

use Hyperf\Database\Connection;
use Hyperf\Seata\Core\Model\Resource;
use Hyperf\Seata\Core\Model\ResourceManager;
use Hyperf\Seata\Exception\SeataException;
use Hyperf\Seata\Rm\DataSource\MysqlConnectionProxy;

class DefaultResourceManager implements ResourceManager
{

    /**
     * All resource managers
     *
     * @var array <BranchType, ResourceManager>
     */
    protected $resources = [];

    public function __construct()
    {
        $this->initResourceManagers();
    }

    protected function initResourceManagers(): void
    {
        Connection::resolverFor('mysql', function ($connection, string $database, string $prefix, array $config) {
            return new MysqlConnectionProxy($connection, $database, $prefix, $config);
        });
    }


    public function registerResource(Resource $resource): void
    {
        $this->resources[$resource->getBranchType()] = $resource;
    }

    public function unregisterResource(Resource $resource): void
    {
        unset($this->resources[$resource->getBranchType()]);
    }

    public function getManagedResources(): array
    {
        return $this->resources;
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