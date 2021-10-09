<?php

namespace Hyperf\Seata\Core\Rpc\Processor\Client;


use Hyperf\Contract\StdoutLoggerInterface;
use Hyperf\Seata\Core\Protocol\HeartbeatMessage;
use Hyperf\Seata\Core\Protocol\RpcMessage;
use Hyperf\Seata\Core\Rpc\Processor\RemotingProcessorInterface;
use Hyperf\Utils\ApplicationContext;

class ClientHeartbeatProcessor implements RemotingProcessorInterface
{


    public function process($channel, RpcMessage $rpcMessage)
    {
        $stdoutLogger = ApplicationContext::getContainer()->get(StdoutLoggerInterface::class);
        if ($rpcMessage->getBody() == HeartbeatMessage::pong()) {
            $stdoutLogger->debug('received PONG from {}', $channel);
        }
    }
}