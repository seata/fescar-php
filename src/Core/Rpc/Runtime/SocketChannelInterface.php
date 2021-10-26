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
namespace Hyperf\Seata\Core\Rpc\Runtime;

use Hyperf\Seata\Core\Protocol\RpcMessage;
use Hyperf\Seata\Core\Rpc\Address;

interface SocketChannelInterface
{
    public function sendSyncWithResponse(RpcMessage $rpcMessage, int $timeoutMillis);

    public function sendSyncWithNoResponse(RpcMessage $rpcMessage, int $timeoutMillis);

    public function getAddress(): Address;
}
