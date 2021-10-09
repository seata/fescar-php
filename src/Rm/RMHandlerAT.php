<?php

namespace Hyperf\Seata\Rm;


use Hyperf\Seata\Core\Model\ResourceManager;
use Hyperf\Seata\Core\Protocol\Transaction\AbstractBranchEndRequest;
use Hyperf\Seata\Core\Protocol\Transaction\AbstractBranchEndResponse;
use Hyperf\Seata\Core\Protocol\Transaction\UndoLogDeleteRequest;

class RMHandlerAT extends AbstractRMHandler
{

    private const LIMIT_ROWS = 3000;

    protected function getResourceManager(): ResourceManager
    {

    }

    public function handle(AbstractBranchEndRequest $request): AbstractBranchEndResponse
    {
        if (! $request instanceof UndoLogDeleteRequest) {
            throw new \InvalidArgumentException('Invalid object type of $request');
        }
        
    }

}