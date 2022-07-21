<?php

declare(strict_types=1);
/**
 * Copyright 1999-2022 Seata.io Group.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 */
namespace Hyperf\Seata\Rm;

use Hyperf\Contract\ConfigInterface;
use Hyperf\Seata\Core\Model\ResourceManagerInterface;
use Hyperf\Seata\Core\Rpc\Runtime\RmRemotingClient;

class RMClient
{
    protected RmRemotingClient $rmRpcClient;

    protected ConfigInterface $config;

    protected DefaultRMHandler $defaultRMHandler;

    protected ResourceManagerInterface $resourceManager;

    public function __construct(ResourceManagerInterface $resourceManager, RmRemotingClient $rmRpcClient, ConfigInterface $config, DefaultRMHandler $defaultRMHandler)
    {
        $this->rmRpcClient = $rmRpcClient;
        $this->config = $config;
        $this->defaultRMHandler = $defaultRMHandler;
        $this->resourceManager = $resourceManager;
    }

    public function init(string $applicationId, string $transactionServiceGroup): void
    {
        $this->rmRpcClient->setApplicationId($applicationId);
        $this->rmRpcClient->setTransactionServiceGroup($transactionServiceGroup);
        $this->rmRpcClient->setResourceManager($this->resourceManager);
        $this->rmRpcClient->setTransactionMessageHandler($this->defaultRMHandler);
        $this->rmRpcClient->init();
    }
}
