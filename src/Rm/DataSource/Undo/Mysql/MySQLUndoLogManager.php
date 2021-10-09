<?php

namespace Hyperf\Seata\Rm\DataSource\Undo\Mysql;


use Hyperf\Seata\Core\Compressor\CompressorType;
use Hyperf\Seata\Rm\DataSource\ConnectionProxyInterface;
use Hyperf\Seata\Rm\DataSource\Undo\AbstractUndoLogManager;
use Hyperf\Seata\Rm\DataSource\Undo\stirng;
use Hyperf\Seata\Rm\DataSource\Undo\UndoLogParser;

// todo
class MySQLUndoLogManager extends AbstractUndoLogManager
{

    protected string $insertUndoLogSql;
    protected string $deleteUndoLogByCreateSql;

    public function __construct(
        LoggerFactory $loggerFactory,
        ConfigInterface $config,
        UndoLogParserFactory $undoLogParserFactory
    ) {
        parent::__construct($loggerFactory, $config, $undoLogParserFactory);
        $this->insertUndoLogSql = sprintf("INSERT INTO %s (branch_id, xid, context, rollback_info, log_status, log_created, log_modified) VALUES (?, ?, ?, ?, ?, now(6), now(6))", $this->undoLogTableName);
        $this->deleteUndoLogByCreateSql = sprintf("DELETE FROM %s WHERE log_created <= ? LIMIT ?", $this->undoLogTableName);
    }

    public function undo(ConnectionProxyInterface $connection, stirng $xid, int $branchId): void
    {

    }

    protected function insertUndoLogWithNormal(
        string $xid,
        int $branchId,
        string $rollbackCtx,
        string $undoLogContent,
        ConnectionProxyInterface $connection
    ): void {
        $this->insertUndoLog($xid, $branchId, $rollbackCtx, $undoLogContent, static::STATE_NORMAL, $connection);
    }

    protected function insertUndoLogWithGlobalFinished(
        string $xid,
        int $branchId,
        UndoLogParser $undoLogParser,
        ConnectionProxyInterface $connection
    ): void {
        $this->insertUndoLog($xid, $branchId, $this->buildContent($undoLogParser->getName(), CompressorType::NONE), $undoLogParser->getDefaultContent(), static::STATE_GLOBAL_FINISHED, $connection);
    }

    public function deleteUndoLogByLogCreated(
        int $logCreated,
        int $limitRows,
        ConnectionProxyInterface $connectionProxy
    ): int {
    }

    private function insertUndoLog(
        string $xid,
        int $branchId,
        string $rollbackCtx,
        string $undoLogContent,
        int $state,
        ConnectionProxyInterface $connection
    ) {

    }
}