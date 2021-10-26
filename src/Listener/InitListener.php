<?php

namespace Hyperf\Seata\Listener;


use Hyperf\DbConnection\Db;
use Hyperf\Event\Contract\ListenerInterface;
use Hyperf\Framework\Event\AfterWorkerStart;
use Hyperf\Framework\Event\BootApplication;
use Hyperf\Framework\Event\MainWorkerStart;
use Hyperf\Seata\Annotation\GlobalTransactionScanner;
use Hyperf\Seata\Rm\DataSource\DataSourceProxy;
use Hyperf\Seata\Utils\Buffer\ByteBuffer;
use Hyperf\Contract\ConfigInterface;

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
            // MainWorkerStart::class,
            BootApplication::class,
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