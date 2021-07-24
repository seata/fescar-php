<?php


namespace Hyperf\Seata\Tm\Api;


use Hyperf\Seata\Tm\Api\Transaction\TransactionInfo;
use Throwable;

interface TransactionalExecutor
{
    /**
     * Execute the business logic here.
     *
     * @return What the business logic returns.
     * @throws Throwable Any throwable during executing.
     */
    public function execute();

    /**
     * Transaction conf or other attr
     * @return TransactionInfo Transaction info
     */
    public function getTransactionInfo(): ?TransactionInfo;
}