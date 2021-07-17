<?php


namespace Hyperf\Seata\Tm\Api;


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
     * transaction conf or other attr
     * @return transaction info
     */
    public function getTransactionInfo(): TransactionInfo;
}