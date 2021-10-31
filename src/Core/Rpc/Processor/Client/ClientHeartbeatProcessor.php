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

use Hyperf\Contract\StdoutLoggerInterface;
use Hyperf\Seata\Core\Protocol\HeartbeatMessage;
use Hyperf\Seata\Core\Protocol\RpcMessage;
use Hyperf\Seata\Core\Rpc\Processor\AbstractRemotingProcessor;
use Hyperf\Seata\Core\Rpc\Runtime\SocketChannelInterface;
use Hyperf\Seata\Logger\StdoutLogger;
use Hyperf\Utils\ApplicationContext;

class ClientHeartbeatProcessor extends AbstractRemotingProcessor
{
    public function process(SocketChannelInterface $channel, RpcMessage $rpcMessage)
    {
        if ($rpcMessage->getBody() == HeartbeatMessage::pong()) {
            $this->getLogger()->debug(sprintf('received PONG from %s', (string) $channel->getAddress()));
        }
    }
}
