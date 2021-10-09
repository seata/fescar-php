<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
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
