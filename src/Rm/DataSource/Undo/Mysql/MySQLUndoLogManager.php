<?php

declare(strict_types=1);
/**
 * Copyright 1999-2022 Seata.io Group.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 */
namespace Hyperf\Seata\Rm\DataSource\Undo\Mysql;

use Hyperf\Contract\ConfigInterface;
use Hyperf\Seata\Core\Compressor\CompressorType;
use Hyperf\Seata\Exception\SQLException;
use Hyperf\Seata\Logger\LoggerFactory;
use Hyperf\Seata\Rm\DataSource\ConnectionProxyInterface;
use Hyperf\Seata\Rm\DataSource\DataSourceProxy;
use Hyperf\Seata\Rm\DataSource\Undo\AbstractUndoLogManager;
use Hyperf\Seata\Rm\DataSource\Undo\UndoLogParser;
use Hyperf\Seata\Rm\DataSource\Undo\UndoLogParserFactory;
use Throwable;

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
        $this->insertUndoLogSql = sprintf('INSERT INTO %s (branch_id, xid, context, rollback_info, log_status, log_created, log_modified) VALUES (?, ?, ?, ?, ?, now(6), now(6))', $this->undoLogTableName);
        $this->deleteUndoLogByCreateSql = sprintf('DELETE FROM %s WHERE log_created <= ? LIMIT ?', $this->undoLogTableName);
    }

    public function undo(DataSourceProxy $dataSourceProxy, string $xid, int $branchId): void
    {
        $conn = $rs = $selectPST = null;
        $originalAutoCommit = true;
        while (true) {
            try {
                // 这里获取连接,需要重写
                $conn = $dataSourceProxy->getPlainConnection();

                // TODO conn 里面要支持 autoCommit 设置
                // The entire undo process should run in a local transaction.
                if ($originalAutoCommit = $conn->getAutoCommit()) {
                    $conn->setAutoCommit(false);
                }
            } catch (Throwable $exception) {
            } finally {
                try {
                    if ($rs != null) {
                        $rs->close();
                    }
                    if ($selectPST != null) {
                        $selectPST->close();
                    }
                    if ($conn != null) {
                        if ($originalAutoCommit) {
                            $conn->setAutoCommit(true);
                        }
                        $conn->close();
                    }
                } catch (SQLException $closeEx) {
                    $this->logger->warning('Failed to close JDBC resource while undo ... ');
                }
            }
        }
//        Connection conn = null;
//        ResultSet rs = null;
//        PreparedStatement selectPST = null;
//        boolean originalAutoCommit = true;
//
//        for (; ; ) {
//            try {
//                conn = dataSourceProxy.getPlainConnection();
//
//                // The entire undo process should run in a local transaction.
//                if (originalAutoCommit = conn.getAutoCommit()) {
//                    conn.setAutoCommit(false);
//                }
//
//                // Find UNDO LOG
//                selectPST = conn.prepareStatement(SELECT_UNDO_LOG_SQL);
//                selectPST.setLong(1, branchId);
//                selectPST.setString(2, xid);
//                rs = selectPST.executeQuery();
//
//                boolean exists = false;
//                while (rs.next()) {
//                    exists = true;
//
//                    // It is possible that the server repeatedly sends a rollback request to roll back
//                    // the same branch transaction to multiple processes,
//                    // ensuring that only the undo_log in the normal state is processed.
//                    int state = rs.getInt(ClientTableColumnsName.UNDO_LOG_LOG_STATUS);
//                    if (!canUndo(state)) {
//                        if (LOGGER.isInfoEnabled()) {
//                            LOGGER.info("xid {} branch {}, ignore {} undo_log", xid, branchId, state);
//                        }
//                        return;
//                    }
//
//                    String contextString = rs.getString(ClientTableColumnsName.UNDO_LOG_CONTEXT);
//                    Map<String, String> context = parseContext(contextString);
//                    byte[] rollbackInfo = getRollbackInfo(rs);
//
//                    String serializer = context == null ? null : context.get(UndoLogConstants.SERIALIZER_KEY);
//                    UndoLogParser parser = serializer == null ? UndoLogParserFactory.getInstance()
//                        : UndoLogParserFactory.getInstance(serializer);
//                    BranchUndoLog branchUndoLog = parser.decode(rollbackInfo);
//
//                    try {
//                        // put serializer name to local
//                        setCurrentSerializer(parser.getName());
//                        List<SQLUndoLog> sqlUndoLogs = branchUndoLog.getSqlUndoLogs();
//                        if (sqlUndoLogs.size() > 1) {
//                            Collections.reverse(sqlUndoLogs);
//                        }
//                        for (SQLUndoLog sqlUndoLog : sqlUndoLogs) {
//                            TableMeta tableMeta = TableMetaCacheFactory.getTableMetaCache(dataSourceProxy.getDbType()).getTableMeta(
//                                    conn, sqlUndoLog.getTableName(), dataSourceProxy.getResourceId());
//                            sqlUndoLog.setTableMeta(tableMeta);
//                            AbstractUndoExecutor undoExecutor = UndoExecutorFactory.getUndoExecutor(
//                                    dataSourceProxy.getDbType(), sqlUndoLog);
//                            undoExecutor.executeOn(conn);
//                        }
//                    } finally {
//                        // remove serializer name
//                        removeCurrentSerializer();
//                    }
//                }
//
//                // If undo_log exists, it means that the branch transaction has completed the first phase,
//                // we can directly roll back and clean the undo_log
//                // Otherwise, it indicates that there is an exception in the branch transaction,
//                // causing undo_log not to be written to the database.
//                // For example, the business processing timeout, the global transaction is the initiator rolls back.
//                // To ensure data consistency, we can insert an undo_log with GlobalFinished state
//                // to prevent the local transaction of the first phase of other programs from being correctly submitted.
//                // See https://github.com/seata/seata/issues/489
//
//                if (exists) {
//                    deleteUndoLog(xid, branchId, conn);
//                    conn.commit();
//                    if (LOGGER.isInfoEnabled()) {
//                        LOGGER.info("xid {} branch {}, undo_log deleted with {}", xid, branchId,
//                            State.GlobalFinished.name());
//                    }
//                } else {
//                    insertUndoLogWithGlobalFinished(xid, branchId, UndoLogParserFactory.getInstance(), conn);
//                    conn.commit();
//                    if (LOGGER.isInfoEnabled()) {
//                        LOGGER.info("xid {} branch {}, undo_log added with {}", xid, branchId,
//                            State.GlobalFinished.name());
//                    }
//                }
//
//                return;
//            } catch (SQLIntegrityConstraintViolationException e) {
//                // Possible undo_log has been inserted into the database by other processes, retrying rollback undo_log
//                if (LOGGER.isInfoEnabled()) {
//                    LOGGER.info("xid {} branch {}, undo_log inserted, retry rollback", xid, branchId);
//                }
//            } catch (Throwable e) {
//                if (conn != null) {
//                    try {
//                        conn.rollback();
//                    } catch (SQLException rollbackEx) {
//                        LOGGER.warn("Failed to close JDBC resource while undo ... ", rollbackEx);
//                    }
//                }
//                throw new BranchTransactionException(BranchRollbackFailed_Retriable, String
//                    .format("Branch session rollback failed and try again later xid = %s branchId = %s %s", xid,
//                        branchId, e.getMessage()), e);
//
//            } finally {

//            }
//        }
    }

    public function deleteUndoLogByLogCreated(
        int $logCreated,
        int $limitRows,
        ConnectionProxyInterface $connectionProxy
    ): int {
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
