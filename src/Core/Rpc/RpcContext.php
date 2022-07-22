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
namespace Hyperf\Seata\Core\Rpc;

class RpcContext
{
    /**
     * @var string
     */
    private $version;

    /**
     * @var string
     */
    private $applicationId;

    /**
     * @var string
     */
    private $transactionServiceGroup;

    /**
     * @var string
     */
    private $clientId;

    public function getVersion(): string
    {
        return $this->version;
    }

    /**
     * @return $this
     */
    public function setVersion(string $version)
    {
        $this->version = $version;
        return $this;
    }

    public function getApplicationId(): string
    {
        return $this->applicationId;
    }

    /**
     * @return $this
     */
    public function setApplicationId(string $applicationId)
    {
        $this->applicationId = $applicationId;
        return $this;
    }

    public function getTransactionServiceGroup(): string
    {
        return $this->transactionServiceGroup;
    }

    /**
     * @return $this
     */
    public function setTransactionServiceGroup(string $transactionServiceGroup)
    {
        $this->transactionServiceGroup = $transactionServiceGroup;
        return $this;
    }

    public function getClientId(): string
    {
        return $this->clientId;
    }

    /**
     * @return $this
     */
    public function setClientId(string $clientId)
    {
        $this->clientId = $clientId;
        return $this;
    }
}
