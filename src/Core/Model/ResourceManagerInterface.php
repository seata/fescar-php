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

interface ResourceManagerInterface extends ResourceManagerInbound, ResourceManagerOutbound
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
     * @return <resourceId, \Hyperf\Seata\Core\Model\Resource>
     */
    public function getManagedResources(): array;

    /**
     * Get the BranchType.
     *
     * @return int the BranchType of ResourceManager
     */
    public function getBranchType(): int;
}
