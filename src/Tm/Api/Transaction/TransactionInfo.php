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
namespace Hyperf\Seata\Tm\Api\Transaction;

use Throwable;

class TransactionInfo
{
    /**
     * @var int
     */
    private $timeOut;

    /**
     * @var string
     */
    private $name;

    /**
     * @var RollbackRule[]
     */
    private $rollbackRules;

    /**
     * @var Propagation
     */
    private $propagation;

    /**
     * @var int
     */
    private $lockRetryInterval;

    /**
     * @var int
     */
    private $lockRetryTimes;

    public function getTimeOut(): int
    {
        return $this->timeOut;
    }

    public function setTimeOut(int $timeOut): void
    {
        $this->timeOut = $timeOut;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return RollbackRule[]
     */
    public function getRollbackRules(): array
    {
        return $this->rollbackRules;
    }

    /**
     * @param RollbackRule[] $rollbackRules
     */
    public function setRollbackRules(array $rollbackRules): void
    {
        $this->rollbackRules = $rollbackRules;
    }

    public function rollbackOn(Throwable $e)
    {
        $winner = null;
        $deepest = PHP_INT_MAX;
        if (! empty($this->rollbackRules)) {
            $winner = new NoRollbackRule(NoRollbackRule::$DEFAULT_NO_ROLLBACK_RULE);
            foreach ($this->rollbackRules as $rollbackRule) {
                $depth = $rollbackRule->getDepth($e);
                if ($depth >= 0 && $depth < $deepest) {
                    $deepest = $depth;
                    $winner = $rollbackRule;
                }
            }
        }
        return ! $winner instanceof NoRollbackRule;
    }

    public function getPropagation(): Propagation
    {
        if ($this->propagation !== null) {
            return $this->propagation;
        }
        // default propagation
        return new Propagation(Propagation::REQUIRED);
    }

    public function setPropagation(Propagation $propagation): void
    {
        $this->propagation = $propagation;
    }

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
