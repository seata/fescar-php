<?php


namespace Hyperf\Seata\Rm\DataSource\Undo;


use Hyperf\Seata\Rm\DataSource\ConnectionProxyInterface;
use Hyperf\Seata\Rm\DataSource\DataSourceProxy;

interface UndoLogManager
{

    public function flushUndoLogs(ConnectionProxyInterface $connection): void;
    public function undo(DataSourceProxy $dataSourceProxy, string $xid, int $branchId): void;
    public function deleteUndoLog(string $xid, int $branchId, ConnectionProxyInterface $connection): void;
    public function batchDeleteUndoLog(array $xids, array $branchIds,ConnectionProxyInterface $connection): void;
    public function deleteUndoLogByLogCreated(int $logCreated, int $limitRows, ConnectionProxyInterface $connectionProxy): int;

}