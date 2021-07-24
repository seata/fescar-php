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

use Hyperf\Seata\Core\Protocol\AbstractMessage;
use Hyperf\Seata\Core\Rpc\RpcContext;

abstract class AbstractTransactionRequest extends AbstractMessage
{
    /**
     * Handle abstract Transaction response.
     *
     * @param $rpcContext the rpc context
     * @return the abstract Transaction response
     */
    abstract public function handle(RpcContext $rpcContext): AbstractTransactionResponse;
}
