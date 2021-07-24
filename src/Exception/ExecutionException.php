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
