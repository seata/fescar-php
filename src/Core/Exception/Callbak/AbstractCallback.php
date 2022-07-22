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
use Hyperf\Seata\Core\Protocol\ResultCode;
use Hyperf\Seata\Core\Protocol\Transaction\AbstractTransactionRequest;
use Hyperf\Seata\Core\Protocol\Transaction\AbstractTransactionResponse;

abstract class AbstractCallback implements CallbackInterface
{
    public function onSuccess(AbstractTransactionRequest $request, AbstractTransactionResponse $response)
    {
        $response->setResultCode(ResultCode::Success);
    }

    public function onTransactionException(AbstractTransactionRequest $request, AbstractTransactionResponse $response, TransactionException $exception)
    {
        $response->setTransactionExceptionCode($exception->getCode());
        $response->setResultCode(ResultCode::Failed);
        $response->setMessage('TransactionException[' . $exception->getMessage() . ']');
    }

    public function onException(AbstractTransactionRequest $request, AbstractTransactionResponse $response, Exception $exception)
    {
        $response->setResultCode(ResultCode::Failed);
        $response->setMessage('RuntimeException[' . $exception->getMessage() . ']');
    }
}
