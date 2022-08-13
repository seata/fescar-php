<?php

declare(strict_types=1);
/**
 * Copyright 2019-2022 Seata.io Group.
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
namespace Hyperf\Seata\Rm\DataSource\Undo;

use Hyperf\Contract\ConfigInterface;
use Hyperf\Seata\Core\Compressor\CompressorType;
use Hyperf\Seata\Logger\LoggerFactory;
use Hyperf\Seata\Logger\LoggerInterface;
use Hyperf\Seata\Rm\DataSource\ConnectionProxyInterface;

abstract class AbstractUndoLogManager implements UndoLogManager
{
    public const STATE_NORMAL = 0;

    public const STATE_GLOBAL_FINISHED = 1;

    protected LoggerInterface $logger;

    protected string $undoLogTableName;

    protected ConfigInterface $config;

    protected string $selectUndoLogSql = '';

    protected string $deleteUndoLogSql = '';

    protected bool $rollbackInfoCompressEnable = true;

    protected int $rollbackInfoCompressType = 0;

    protected int $rollbackInfoCompressThreshold = 0;

    protected UndoLogParser $undoLogParser;

    public function __construct(LoggerFactory $loggerFactory, ConfigInterface $config, UndoLogParserFactory $undoLogParserFactory)
    {
        $this->logger = $loggerFactory->create(static::class);
        $this->config = $config;
        $this->undoLogTableName = $config->get('seata.client.undo.log_table', 'undo_log');
        $this->rollbackInfoCompressEnable = $config->get('seata.client.undo.compress.enable', true);
        $this->rollbackInfoCompressType = $config->get('seata.client.undo.compress.type', 0);
        $this->rollbackInfoCompressThreshold = $config->get('seata.client.undo.compress.threshold', 0);
        $this->undoLogParser = $undoLogParserFactory->getDefaultParser();
        $this->selectUndoLogSql = sprintf('SELECT * FROM %s WHERE branch_id  = ? AND xid = ? FOR UPDATE', $this->undoLogTableName);
        $this->deleteUndoLogSql = sprintf('DELETE FROM %s WHERE branch_id  = ? AND xid = ?', $this->undoLogTableName);
    }

    public function deleteUndoLog(string $xid, int $branchId, ConnectionProxyInterface $connection): void
    {
        /* @var \Hyperf\Seata\Rm\DataSource\MysqlConnectionProxy $connection */
        $connection->delete(static::DELETE_UNDO_LOG_SQL, [
            $branchId,
            $xid,
        ]);
    }

    public function batchDeleteUndoLog(array $xids, array $branchIds, ConnectionProxyInterface $connection): void
    {
        $branchIdsPlacehold = rtrim(str_repeat('?, ', count($branchIds)), ', ');
        $xidsPlacehold = rtrim(str_repeat('?, ', count($xids)), ', ');
        $sql = sprintf('DELETE FROM %s WHERE branch_id IN (%s) AND xid IN (%s)', $this->undoLogTableName, $branchIdsPlacehold, $xidsPlacehold);
        /* @var \Hyperf\Seata\Rm\DataSource\MysqlConnectionProxy $connection */
        $connection->delete($sql, array_values(array_merge_recursive($branchIds, $xids)));
    }

    public function flushUndoLogs(ConnectionProxyInterface $connection): void
    {
        /** @var \Hyperf\Seata\Rm\DataSource\MysqlConnectionProxy $connection */
        $connectionContext = $connection->getContext();
        if ($connectionContext->hasUndoLog()) {
            $xid = $connectionContext->getXid();
            $branchId = $connectionContext->getBranchId();
            $branchUndoLog = new BranchUndoLog();
            $branchUndoLog->setXid($xid)->setBranchId($branchId)->setSqlUndoLogs($connectionContext->getUndoItms());
            $undoLogContent = $this->undoLogParser->encode($branchUndoLog);
            $compressorType = CompressorType::NONE;
            // todo compressor logical
            $this->logger->debug(sprintf('Flushing UNDO LOG: %s', $undoLogContent));
            $this->insertUndoLogWithNormal($xid, $branchId, $this->buildContext($this->undoLogParser->getName(), $compressorType), $undoLogContent, $connection);
        }
    }

    protected function canUndo(int $state): bool
    {
        return $state === static::STATE_NORMAL;
    }

    abstract protected function insertUndoLogWithNormal(
        string $xid,
        int $branchId,
        string $rollbackCtx,
        string $undoLogContent,
        ConnectionProxyInterface $connection
    ): void;

    abstract protected function insertUndoLogWithGlobalFinished(
        string $xid,
        int $branchId,
        UndoLogParser $undoLogParser,
        ConnectionProxyInterface $connection
    ): void;
}
