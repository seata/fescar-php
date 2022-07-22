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

use Hyperf\Seata\Exception\IllegalArgumentException;
use Throwable;

class RollbackRule
{
    /**
     * @var string
     */
    private $exceptionName;

    public function __construct($exception)
    {
        if (empty($exception)) {
            throw new IllegalArgumentException("'exception' cannot be null or empty");
        }

        if (! is_string($exception) && ! $exception instanceof Throwable) {
            throw new IllegalArgumentException('"exception" cannot be ' . gettype($exception));
        }

        if (is_string($exception)) {
            $this->exceptionName = $exception;
        }

        if ($exception instanceof Throwable) {
            $this->exceptionName = get_class($exception);
        }
    }

    public function __toString()
    {
        return 'RollbackRule with pattern [' . $this->exceptionName . ']';
    }

    public function getExceptionName(): string
    {
        return $this->exceptionName;
    }

    public function getDepth(Throwable $ex, int $depth = 0)
    {
        if (get_class($ex) === $this->exceptionName) {
            return $depth;
        }

        if (get_class($ex) === Throwable::class) {
            return -1;
        }

        return $this->getDepth($ex, ++$depth);
    }

    public function hashCode()
    {
        // @todo 获取 hashCode
        return md5($this->exceptionName);
    }
}
