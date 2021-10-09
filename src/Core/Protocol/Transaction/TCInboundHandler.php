<?php


namespace Hyperf\Seata\Core\Protocol\Transaction;


use Hyperf\Seata\Core\Rpc\RpcContext;

interface TCInboundHandler
{

    /**
     * Handle global begin response.
     */
    public function handle(
        AbstractTransactionRequestToTC $globalBegin,
        RpcContext $rpcContext
    ): AbstractTransactionResponse;

}