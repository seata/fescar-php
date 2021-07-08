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

interface Resource
{
    /**
     * Get the resource group id.
     * e.g. master and slave data-source should be with the same resource group id.
     */
    public function getResourceGroupId(): string;

    /**
     * Get the resource id.
     * e.g. url of a data-source could be the id of the db data-source resource.
     */
    public function getResourceId(): string;

    /**
     * get resource type, AT、TCC etc.
     */
    public function getBranchType(): int;
}
