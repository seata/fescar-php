<?php

declare(strict_types=1);
/**
 * Copyright 2019-2022 Seata.io Group.
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
namespace Hyperf\Seata\Tm;

use Hyperf\Contract\ConfigInterface;
use Hyperf\Seata\Core\Rpc\Runtime\TmRemotingClient as SwooleTMClient;

class TMClient
{
    protected SwooleTMClient $tmRpcClient;

    protected ConfigInterface $config;

    public function __construct(SwooleTMClient $tmRpcClient, ConfigInterface $config)
    {
        $this->tmRpcClient = $tmRpcClient;
        $this->config = $config;
    }

    public function init(string $applicationId, string $transactionServiceGroup, ?string $accessKey = null, ?string $secretKey = null)
    {
        $this->tmRpcClient->setApplicationId($applicationId);
        $this->tmRpcClient->setTransactionServiceGroup($transactionServiceGroup);
        $this->tmRpcClient->setAccessKey($accessKey);
        $this->tmRpcClient->setSecretKey($secretKey);
        $this->tmRpcClient->init();
    }
}
