<?php


namespace Hyperf\Seata\Core\Model;


interface ResourceManager extends ResourceManagerInbound, ResourceManagerOutbound
{

    /**
     * Register a Resource to be managed by Resource Manager.
     *
     * @param resource The resource to be managed.
     */
    public function registerResource(Resource $resource): void;

    /**
     * Unregister a Resource from the Resource Manager.
     *
     * @param resource The resource to be removed.
     */
    public function unregisterResource(Resource $resource): void;

    /**
     * Get all resources managed by this manager.
     *
     * @return resourceId -> Resource Map
     */
    public function getManagedResources();

    /**
     * Get the BranchType.
     *
     * @return The BranchType of ResourceManager.
     */
    public function getBranchType(): int;

}