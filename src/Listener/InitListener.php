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
namespace Hyperf\Seata\Listener;

use Hyperf\DbConnection\Db;
use Hyperf\Event\Contract\ListenerInterface;
use Hyperf\Framework\Event\MainWorkerStart;
use Hyperf\Seata\Annotation\GlobalTransactionScanner;
use Hyperf\Seata\Rm\DataSource\DataSourceProxy;
use Hyperf\Server\Event\MainCoroutineServerStart;

class InitListener implements ListenerInterface
{
    protected GlobalTransactionScanner $globalTransactionScanner;

    protected DataSourceProxy $dataSourceProxy;

    public function __construct(GlobalTransactionScanner $globalTransactionScanner, DataSourceProxy $dataSourceProxy)
    {
        $this->globalTransactionScanner = $globalTransactionScanner;
        $this->dataSourceProxy = $dataSourceProxy;
    }

    public function listen(): array
    {
        return [
            MainCoroutineServerStart::class,
            MainWorkerStart::class,
        ];
    }

    public function process(object $event)
    {
        // Execute any sql to init the database connection
        Db::select('select 1');
        // Init TM and RM clients
        $this->globalTransactionScanner->initClients();
    }
}
