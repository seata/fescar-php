<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
namespace Hyperf\Seata\Core\Model;

interface ResourceManager extends ResourceManagerInbound, ResourceManagerOutbound
{
    /**
     * Register a Resource to be managed by Resource Manager.
     *
     * @param resource the resource to be managed
     */
    public function registerResource(Resource $resource): void;

    /**
     * Unregister a Resource from the Resource Manager.
     *
     * @param resource the resource to be removed
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
     * @return The branchType of ResourceManager
     */
    public function getBranchType(): int;
}
