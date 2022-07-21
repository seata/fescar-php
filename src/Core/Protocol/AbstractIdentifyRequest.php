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
namespace Hyperf\Seata\Core\Protocol;

abstract class AbstractIdentifyRequest extends AbstractMessage
{
    /**
     * The Version.
     */
    protected $version = Version::CURRENT;

    /**
     * The Application id.
     * @var string
     */
    protected $applicationId;

    /**
     * The Transaction service group.
     * @var string
     */
    protected $transactionServiceGroup;

    /**
     * The Extra data.
     */
    protected $extraData;

    public function __construct(string $applicationId, string $transactionServiceGroup, ?string $extraData = null)
    {
        $this->applicationId = $applicationId;
        $this->transactionServiceGroup = $transactionServiceGroup;
        $this->extraData = $extraData;
    }

    public function getApplicationId(): string
    {
        return $this->applicationId;
    }

    /**
     * @param string $applicationId
     * @return AbstractIdentifyRequest
     */
    public function setApplicationId($applicationId)
    {
        $this->applicationId = $applicationId;
        return $this;
    }

    public function getTransactionServiceGroup(): string
    {
        return $this->transactionServiceGroup;
    }

    /**
     * @param string $transactionServiceGroup
     * @return AbstractIdentifyRequest
     */
    public function setTransactionServiceGroup($transactionServiceGroup)
    {
        $this->transactionServiceGroup = $transactionServiceGroup;
        return $this;
    }

    public function getExtraData(): ?string
    {
        return $this->extraData;
    }

    /**
     * @param null|string $extraData
     * @return AbstractIdentifyRequest
     */
    public function setExtraData($extraData)
    {
        $this->extraData = $extraData;
        return $this;
    }

    public function getVersion(): string
    {
        return $this->version;
    }

    /**
     * @param string $version
     * @return AbstractIdentifyRequest
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }
}
