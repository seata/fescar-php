<?php

namespace Hyperf\Seata\Core\Rpc\Runtime;

use Hyperf\Seata\Core\Protocol\RpcMessage;
use Hyperf\Seata\Core\Rpc\Processor\RemotingProcessorInterface;

class ProcessorManager
{
    /**
     * @var RemotingProcessorInterface[]
     */
    protected array $processorTable = [];

    public function registerProcessor(int $messageType, RemotingProcessorInterface $processor):void
    {
        $this->processorTable[$messageType] = $processor;
    }

    public function dispatch(SocketChannelInterface $channel, RpcMessage $message)
    {
        if (! isset($this->processorTable[$message->getBody()->getTypeCode()])) {
            return;
        }
        $this->processorTable[$message->getBody()->getTypeCode()]->process($channel, $message);
    }
}