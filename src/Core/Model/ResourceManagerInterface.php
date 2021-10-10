<?php


namespace Hyperf\Seata\Core\Model;


interface ResourceManagerInterface extends ResourceManagerInbound, ResourceManagerOutbound
{

    /**
     * Register a Resource to be managed by Resource Manager.
     *
     * @param Resource The resource to be managed.
     */
    public function registerResource(Resource $resource): void;

    /**
     * Unregister a Resource from the Resource Manager.
     *
     * @param Resource The resource to be removed.
     */
    public function unregisterResource(Resource $resource): void;

    /**
     * Get all resources managed by this manager.
     *
     * @return <resourceId, \Hyperf\Seata\Core\Model\Resource>
     */
    public function getManagedResources(): array;

    /**
     * Get the BranchType.
     *
     * @return int The BranchType of ResourceManager.
     */
    public function getBranchType(): int;

}