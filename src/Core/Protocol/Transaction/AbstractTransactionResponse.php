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
namespace Hyperf\Seata\Core\Protocol\Transaction;

use Hyperf\Seata\Core\Protocol\AbstractResultMessage;
use Hyperf\Seata\Exception\TransactionExceptionCode;

abstract class AbstractTransactionResponse extends AbstractResultMessage
{
    /**
     * @var int
     */
    protected $transactionExceptionCode = TransactionExceptionCode::Unknown;

    public function getTransactionExceptionCode(): int
    {
        return $this->transactionExceptionCode;
    }

    /**
     * @return $this
     */
    public function setTransactionExceptionCode(int $transactionExceptionCode)
    {
        $this->transactionExceptionCode = $transactionExceptionCode;
        return $this;
    }
}
