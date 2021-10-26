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
namespace Hyperf\Seata\Core\Rpc\Processor\Client;

use Hyperf\Seata\Core\Protocol\HeartbeatMessage;
use Hyperf\Seata\Core\Protocol\RpcMessage;
use Hyperf\Seata\Core\Rpc\Processor\AbstractRemotingProcessor;

class ClientHeartbeatProcessor extends AbstractRemotingProcessor
{
    public function process($channel, RpcMessage $rpcMessage)
    {
        if ($rpcMessage->getBody() == HeartbeatMessage::pong()) {
            $this->getLogger()->debug('received PONG from {}', $channel);
        }
    }
}
