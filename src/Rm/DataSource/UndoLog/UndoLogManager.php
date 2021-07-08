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
namespace Hyperf\Seata\Rm\DataSource\UndoLog;

use Hyperf\Seata\Common\Constants;
use Hyperf\Seata\Exception\NotSupportYetException;

class UndoLogManager
{
    public const State_Normal = 0;

    public const State_GlobalFinished = 1;

    private const UNDO_LOG_TABLE_NAME = 'undo_log';

    private const INSERT_UNDO_LOG_SQL
        = 'INSERT INTO ' . self::UNDO_LOG_TABLE_NAME . ' (branch_id, xid, context, rollback_info, log_status, log_created, log_modified)' . ' VALUES (?, ?, ?, ?, ?, now(), now())';

    private const DELETE_UNDO_LOG_SQL
        = 'DELETE FROM ' . self::UNDO_LOG_TABLE_NAME . ' WHERE branch_id = ? AND xid = ?';

    private const SELECT_UNDO_LOG_SQL
        = 'SELECT * FROM ' . self::UNDO_LOG_TABLE_NAME . ' WHERE branch_id = ? AND xid = ? FOR UPDATE';

    /**
     * @var \Psr\Log\LoggerInterface
     */
    protected $logger;

    /**
     * Flush undo logs.
     *
     * @param cp the cp
     * @throws SQLException the sql exception
     */
    public function flushUndoLogs(ConnectionProxy $cp)
    {
        $this->assertDbSupport($cp->getDbType());

        $connectionContext = $cp->getContext();
        $xid = $connectionContext->getXid();
        $branchID = $connectionContext->getBranchId();

        $branchUndoLog = new BranchUndoLog();
        $branchUndoLog->setXid($xid);
        $branchUndoLog->setBranchId($branchID);
        $branchUndoLog->setSqlUndoLogs($connectionContext->getUndoItems());

        $parser = UndoLogParserFactory . getInstance();
        $undoLogContent = parser . encode($branchUndoLog);

        if ($this->logger) {
            $this->logger->debug('Flushing UNDO LOG: {}', json_encode([$undoLogContent, Constants::DEFAULT_CHARSET_NAME]));
        }

        insertUndoLogWithNormal(xid, branchID, buildContext(parser . getName()), undoLogContent, $cp->getTargetConnection());
    }

    private function assertDbSupport(string $dbType): void
    {
        if ($dbType !== 'mysql') {
            throw new NotSupportYetException('DbType[' + $dbType + '] is not support yet!');
        }
    }
}
