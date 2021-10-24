<?php

namespace Hyperf\Seata\Core\Rpc\Hook;

use Hyperf\Seata\Core\Protocol\RpcMessage;

interface RpcHookInterface
{
    public function doBeforeRequest(string $remoteAddr, RpcMessage $request);

    public function doAfterResponse(string $remoteAddr, RpcMessage $request, object $response);
}