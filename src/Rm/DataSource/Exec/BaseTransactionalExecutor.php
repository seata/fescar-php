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

    abstract protected function doExecute(...$args);
}
