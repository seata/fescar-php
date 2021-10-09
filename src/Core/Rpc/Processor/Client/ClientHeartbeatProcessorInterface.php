<?php


namespace Hyperf\Seata\Core\Rpc\Processor\Client;


use Hyperf\Contract\StdoutLoggerInterface;
use Hyperf\Seata\Core\Protocol\HeartbeatMessage;
use Hyperf\Seata\Core\Protocol\RpcMessage;
use Hyperf\Seata\Core\Rpc\Processor\AbstractRemotingProcessor;
use Swoole\Coroutine\Socket;

class ClientHeartbeatProcessorInterface extends AbstractRemotingProcessor
{

    /**
     * @var StdoutLoggerInterface
     */
    protected $logger;

    public function __construct(StdoutLoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    /**
     * @param Socket $channel
     * @param RpcMessage $rpcMessage
     */
    public function process($channel, RpcMessage $rpcMessage)
    {
        if ($rpcMessage->getBody() == HeartbeatMessage::pong()) {
            $this->logger->debug('received PONG from ' . $channel->getsockname());
        }
    }
}