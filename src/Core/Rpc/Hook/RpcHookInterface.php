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
namespace Hyperf\Seata\Core\Rpc\Hook;

use Hyperf\Seata\Core\Protocol\RpcMessage;

interface RpcHookInterface
{
    public function doBeforeRequest(string $remoteAddr, RpcMessage $request);

    public function doAfterResponse(string $remoteAddr, RpcMessage $request, object $response);
}
