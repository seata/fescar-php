<?php


namespace Hyperf\Seata\Core\Protocol\Transaction;


interface RMInboundHandler
{

    public function handle(AbstractBranchEndRequest $request): AbstractBranchEndResponse;

}