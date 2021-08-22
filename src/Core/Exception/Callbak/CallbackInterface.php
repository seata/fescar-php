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
