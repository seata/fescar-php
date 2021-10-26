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
