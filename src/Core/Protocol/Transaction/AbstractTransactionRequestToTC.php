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
    public function setTCInboundHandler(TCInboundHandler $handler)
    {
        $this->handler = $handler;
    }

    public function handle(RpcContext $rpcContext): ?AbstractTransactionResponse
    {
        return $this->handler->handle($this, $rpcContext);
    }
}
