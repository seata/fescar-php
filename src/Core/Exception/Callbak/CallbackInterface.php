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
namespace Hyperf\Seata\Core\Exception\Callbak;

use Exception;
use Hyperf\Seata\Core\Exception\TransactionException;
use Hyperf\Seata\Core\Protocol\Transaction\AbstractTransactionRequest;
use Hyperf\Seata\Core\Protocol\Transaction\AbstractTransactionResponse;

interface CallbackInterface
{
    /**
     * Execute.
     *
     * @param request  the request
     * @param response the response
     * @param mixed $request
     * @param mixed $response
     * @throws TransactionException the transaction exception
     */
    public function execute(AbstractTransactionRequest $request, AbstractTransactionResponse $response);

    /**
     * On success.
     *
     * @param request  the request
     * @param response the response
     * @param mixed $request
     * @param mixed $response
     */
    public function onSuccess(AbstractTransactionRequest $request, AbstractTransactionResponse $response);

    /**
     * onTransactionException.
     *
     * @param request   the request
     * @param response  the response
     * @param exception the exception
     * @param mixed $request
     * @param mixed $response
     */
    public function onTransactionException(AbstractTransactionRequest $request, AbstractTransactionResponse $response, TransactionException $exception);

    /**
     * on other exception.
     *
     * @param request   the request
     * @param response  the response
     * @param exception the exception
     * @param mixed $request
     * @param mixed $response
     */
    public function onException(AbstractTransactionRequest $request, AbstractTransactionResponse $response, Exception $exception);
}
