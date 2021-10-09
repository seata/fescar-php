<?php

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