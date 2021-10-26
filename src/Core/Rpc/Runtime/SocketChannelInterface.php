<?php


namespace Hyperf\Seata\Core\Rpc\Runtime;


use Hyperf\Seata\Core\Protocol\RpcMessage;
use Hyperf\Seata\Core\Rpc\Address;

interface SocketChannelInterface
{

    public function sendSyncWithResponse(RpcMessage $rpcMessage, int $timeoutMillis);

    public function sendSyncWithNoResponse(RpcMessage $rpcMessage, int $timeoutMillis);

    public function getAddress(): Address;

}