<?php

namespace Hyperf\Seata\Core\Rpc\Runtime;

use Hyperf\Seata\Core\Rpc\Processor\RemotingProcessorInterface;

class ProcessorManager
{
    protected array $processorTable = [];

    public function registerProcessor(int $messageType, RemotingProcessorInterface $processor):void
    {
        $this->processorTable[$messageType] = $processor;
    }
}