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
namespace Hyperf\Seata\Core\Rpc;

use Hyperf\Seata\Core\Protocol\AbstractMessage;
use Hyperf\Seata\Core\Protocol\AbstractResultMessage;

interface TransactionMessageHandler
{
    /**
     * On a request received.
     *
     * @param request received request message
     * @param context context of the RPC
     * @return response to the request
     */
    public function onRequest(AbstractMessage $request, RpcContext $context): AbstractResultMessage;

    /**
     * On a response received.
     *
     * @param response received response message
     * @param context  context of the RPC
     */
    public function onResponse(AbstractResultMessage $response, RpcContext $context);
}
