<?php

namespace Hyperf\Seata\Core\Protocol\Transaction;


use Hyperf\Seata\Core\Rpc\RpcContext;

abstract class AbstractTransactionRequestToTC extends AbstractTransactionRequest
{

    /**
     * The Handler.
     *
     * @vat TCInboundHandler
     */
    protected $handler;

    /**
     * Sets tc inbound handler.
     */
    public function setTCInboundHandler(TCInboundHandler $handler): void
    {
        $this->handler = $handler;
    }

    public function handle(RpcContext $rpcContext): AbstractTransactionResponse
    {
        return $this->handler->handle($this, $rpcContext);
    }

}