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

abstract class AbstractIdentifyResponse extends AbstractResultMessage
{
    /**
     * The Version.
     */
    protected $version = Version::CURRENT;

    /**
     * @var string
     */
    protected $extraData;

    /**
     * @var bool
     */
    protected $identified;

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

    public function getExtraData(): string
    {
        return $this->extraData;
    }

    /**
     * @return $this
     */
    public function setExtraData(string $extraData)
    {
        $this->extraData = $extraData;
        return $this;
    }

    public function isIdentified(): bool
    {
        return $this->identified;
    }

    /**
     * @return $this
     */
    public function setIdentified(bool $identified)
    {
        $this->identified = $identified;
        return $this;
    }
}
