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
namespace Hyperf\Seata\Exception;

use Exception;
use Hyperf\Seata\Tm\Api\GlobalTransaction;
use Hyperf\Seata\Tm\Api\TransactionalExecutorCode;
use Throwable;

class ExecutionException extends Exception
{
    /**
     * @var GlobalTransaction
     */
    protected $transaction;

    /**
     * TransactionalExecutor code.
     * @var int
     */
    protected $code;

    /**
     * @var Throwable
     */
    protected $originalException;

    /**
     * ExecutionException constructor.
     * @param TransactionalExecutorCode $code
     * @param Throwable $originalException
     */
    public function __construct(GlobalTransaction $transaction, int $code, ?Throwable $cause = null, ?Throwable $originalException = null, string $message = '')
    {
        parent::__construct($message, $code, $cause);
        $this->transaction = $transaction;
        $this->code = $code;
        $this->originalException = $originalException;
    }

    public function getTransaction(): GlobalTransaction
    {
        return $this->transaction;
    }

    public function setTransaction(GlobalTransaction $transaction): void
    {
        $this->transaction = $transaction;
    }

    /**
     * @return int
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param int $code
     */
    public function setCode($code): void
    {
        $this->code = $code;
    }

    public function getOriginalException(): Throwable
    {
        return $this->originalException;
    }

    public function setOriginalException(Throwable $originalException): void
    {
        $this->originalException = $originalException;
    }
}
