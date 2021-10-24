<?php

namespace Hyperf\Seata\Core\Rpc\Processor\Client;


use Hyperf\Seata\Core\Protocol\HeartbeatMessage;
use Hyperf\Seata\Core\Protocol\RpcMessage;
use Hyperf\Seata\Core\Rpc\Processor\AbstractRemotingProcessor;
use Hyperf\Seata\Core\Rpc\Processor\RemotingProcessorInterface;

class ClientHeartbeatProcessor extends AbstractRemotingProcessor
{

    public function process($channel, RpcMessage $rpcMessage)
    {
        if ($rpcMessage->getBody() == HeartbeatMessage::pong()) {
            $this->getLogger()->debug('received PONG from {}', $channel);
        }
    }

}