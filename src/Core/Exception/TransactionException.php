<?php


namespace Hyperf\Seata\Core\Exception;


use Exception;
use Hyperf\Seata\Exception\TransactionExceptionCode;
use Throwable;

class TransactionException extends Exception
{
    protected $code = TransactionExceptionCode::Unknown;

    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}