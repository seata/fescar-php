<?php

namespace Hyperf\Seata\Core\Rpc;

use Hyperf\Seata\Core\Rpc\Processor\RemotingProcessorInterface;

class ProcessorManager
{

    private array $processorTable = [];

    public function registerProcessor(int $messageType, RemotingProcessorInterface $processor):void
    {
        $this->processorTable[$messageType] = $processor;
    }
}