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
namespace Hyperf\Seata\Core\Exception;

use Hyperf\Contract\ConfigInterface;
use Hyperf\Seata\Core\Exception\Callbak\AbstractCallback;
use Hyperf\Seata\Core\Protocol\Transaction\AbstractTransactionRequest;
use Hyperf\Seata\Core\Protocol\Transaction\AbstractTransactionResponse;
use Hyperf\Seata\Logger\LoggerFactory;
use Hyperf\Seata\Logger\LoggerInterface;
use RuntimeException;

class AbstractExceptionHandler
{
    protected LoggerInterface $logger;

    protected ConfigInterface $config;

    public function __construct(LoggerFactory $loggerFactory, ConfigInterface $config)
    {
        $this->logger = $loggerFactory->create(static::class);
        $this->config = $config;
    }

    public function exceptionHandleTemplate(
        AbstractCallback $callback,
        AbstractTransactionRequest $request,
        AbstractTransactionResponse $response
    ) {
        try {
            $callback->execute($request, $response);
            $callback->onSuccess($request, $response);
        } catch (TransactionException $tex) {
            $this->logger->error('Catch TransactionException while do RPC, request: ' . $tex->getMessage());
            $callback->onTransactionException($request, $response, $tex);
        } catch (RuntimeException $rex) {
            $this->logger->error('Catch RuntimeException while do RPC, request:' . $rex->getMessage());
            $callback->onException($request, $response, $rex);
        }
    }
}
