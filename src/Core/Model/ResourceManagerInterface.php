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
