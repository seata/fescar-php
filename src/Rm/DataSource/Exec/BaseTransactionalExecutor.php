<?php

namespace Hyperf\Seata\Rm\DataSource\Exec;


use Hyperf\Seata\Core\Context\RootContext;

abstract class BaseTransactionalExecutor implements Executor
{

    /**
     * @var StatementProxy
     */
    private $statementProxy;

    public function execute(...$args)
    {
        $connectionProxy = $this->statementProxy->getConnectionProxy();
        if (RootContext::inGlobalTransaction()) {
            $xid = RootContext::getXID();
            $connectionProxy->bind($xid);
        }

        if (RootContext::requireGlobalLock()) {
            $connectionProxy->setGlobalLockRequire(true);
        } else {
            $connectionProxy->setGlobalLockRequire(false);
        }
        return $this->doExecute($args);
    }

    protected abstract function doExecute(...$args);

}