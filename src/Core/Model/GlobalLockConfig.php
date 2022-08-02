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
namespace Hyperf\Seata\Core\Model;

class GlobalLockConfig
{
    /**
     * @var int
     */
    private $lockRetryInterval;

    /**
     * @var int
     */
    private $lockRetryTimes;

    public function getLockRetryInterval(): int
    {
        return $this->lockRetryInterval;
    }

    public function setLockRetryInterval(int $lockRetryInterval): void
    {
        $this->lockRetryInterval = $lockRetryInterval;
    }

    public function getLockRetryTimes(): int
    {
        return $this->lockRetryTimes;
    }

    public function setLockRetryTimes(int $lockRetryTimes): void
    {
        $this->lockRetryTimes = $lockRetryTimes;
    }
}
