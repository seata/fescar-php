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
namespace Hyperf\Seata\Tm\Api;

use Hyperf\Seata\Tm\Api\Transaction\TransactionInfo;
use Throwable;

interface TransactionalExecutor
{
    /**
     * Execute the business logic here.
     *
     * @throws Throwable any throwable during executing
     * @return What the business logic returns
     */
    public function execute();

    /**
     * Transaction conf or other attr.
     * @return TransactionInfo Transaction info
     */
    public function getTransactionInfo(): ?TransactionInfo;
}
