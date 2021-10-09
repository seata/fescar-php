<?php

namespace Hyperf\Seata\Core\Protocol\Transaction;


use Hyperf\Seata\Core\Protocol\AbstractMessage;
use Hyperf\Seata\Core\Rpc\RpcContext;

abstract class AbstractTransactionRequest extends AbstractMessage
{
    /**
     * Handle abstract transaction response.
     *
     * @param $rpcContext the rpc context
     * @return null|AbstractTransactionResponse the abstract transaction response
     */
    abstract public function handle(RpcContext $rpcContext): ?AbstractTransactionResponse;
}
