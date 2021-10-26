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
namespace Hyperf\Seata\Common;

class DefaultValues
{
    public const DEFAULT_CLIENT_LOCK_RETRY_INTERVAL = 10;

    public const DEFAULT_TM_DEGRADE_CHECK_ALLOW_TIMES = 10;

    public const DEFAULT_CLIENT_LOCK_RETRY_TIMES = 30;

    public const DEFAULT_CLIENT_LOCK_RETRY_POLICY_BRANCH_ROLLBACK_ON_CONFLICT = true;

    public const DEFAULT_LOG_EXCEPTION_RATE = 100;

    public const DEFAULT_CLIENT_ASYNC_COMMIT_BUFFER_LIMIT = 10000;

    public const DEFAULT_TM_DEGRADE_CHECK_PERIOD = 2000;

    public const DEFAULT_CLIENT_REPORT_RETRY_COUNT = 5;

    public const DEFAULT_CLIENT_REPORT_SUCCESS_ENABLE = false;

    public const DEFAULT_CLIENT_TABLE_META_CHECK_ENABLE = false;

    public const DEFAULT_TABLE_META_CHECKER_INTERVAL = 60000;

    public const DEFAULT_TM_DEGRADE_CHECK = false;

    public const DEFAULT_CLIENT_SAGA_BRANCH_REGISTER_ENABLE = false;

    public const DEFAULT_CLIENT_SAGA_RETRY_PERSIST_MODE_UPDATE = false;

    public const DEFAULT_CLIENT_SAGA_COMPENSATE_PERSIST_MODE_UPDATE = false;

    /**
     * Shutdown timeout default 3s.
     */
    public const DEFAULT_SHUTDOWN_TIMEOUT_SEC = 3;

    public const DEFAULT_SELECTOR_THREAD_SIZE = 1;

    public const DEFAULT_BOSS_THREAD_SIZE = 1;

    public const DEFAULT_SELECTOR_THREAD_PREFIX = 'NettyClientSelector';

    public const DEFAULT_WORKER_THREAD_PREFIX = 'NettyClientWorkerThread';

    public const DEFAULT_ENABLE_CLIENT_BATCH_SEND_REQUEST = true;

    public const DEFAULT_BOSS_THREAD_PREFIX = 'NettyBoss';

    public const DEFAULT_NIO_WORKER_THREAD_PREFIX = 'NettyServerNIOWorker';

    public const DEFAULT_EXECUTOR_THREAD_PREFIX = 'NettyServerBizHandler';

    public const DEFAULT_TRANSPORT_HEARTBEAT = true;

    public const DEFAULT_TRANSACTION_UNDO_DATA_VALIDATION = true;

    public const DEFAULT_TRANSACTION_UNDO_LOG_SERIALIZATION = 'jackson';

    public const DEFAULT_ONLY_CARE_UPDATE_COLUMNS = true;

    /**
     * The constant  DEFAULT_TRANSACTION_UNDO_LOG_TABLE.
     */
    public const DEFAULT_TRANSACTION_UNDO_LOG_TABLE = 'undo_log';

    /**
     * The constant DEFAULT_STORE_DB_GLOBAL_TABLE.
     */
    public const DEFAULT_STORE_DB_GLOBAL_TABLE = 'global_table';

    /**
     * The constant DEFAULT_STORE_DB_BRANCH_TABLE.
     */
    public const DEFAULT_STORE_DB_BRANCH_TABLE = 'branch_table';

    /**
     * The constant DEFAULT_LOCK_DB_TABLE.
     */
    public const DEFAULT_LOCK_DB_TABLE = 'lock_table';

    public const DEFAULT_TM_COMMIT_RETRY_COUNT = 5;

    public const DEFAULT_TM_ROLLBACK_RETRY_COUNT = 5;

    public const DEFAULT_GLOBAL_TRANSACTION_TIMEOUT = 60000;

    public const DEFAULT_TX_GROUP = 'my_test_tx_group';

    public const DEFAULT_TC_CLUSTER = 'default';

    public const DEFAULT_GROUPLIST = '127.0.0.1:8091';

    public const DEFAULT_DATA_SOURCE_PROXY_MODE = 'AT';

    public const DEFAULT_DISABLE_GLOBAL_TRANSACTION = false;

    public const SERVER_DEFAULT_PORT = 8091;

    public const SERVER_DEFAULT_STORE_MODE = 'file';

    public const DEFAULT_SAGA_JSON_PARSER = 'fastjson';

    public const DEFAULT_SERVER_ENABLE_CHECK_AUTH = true;

    public const DEFAULT_LOAD_BALANCE = 'RandomLoadBalance';

    public const VIRTUAL_NODES_DEFAULT = 10;

    /**
     * the constant DEFAULT_CLIENT_UNDO_COMPRESS_ENABLE.
     */
    public const DEFAULT_CLIENT_UNDO_COMPRESS_ENABLE = true;

    /**
     * the constant DEFAULT_CLIENT_UNDO_COMPRESS_TYPE.
     */
    public const DEFAULT_CLIENT_UNDO_COMPRESS_TYPE = 'zip';

    /**
     * the constant DEFAULT_CLIENT_UNDO_COMPRESS_THRESHOLD.
     */
    public const DEFAULT_CLIENT_UNDO_COMPRESS_THRESHOLD = '64k';

    /**
     * the constant DEFAULT_RETRY_DEAD_THRESHOLD.
     */
    public const DEFAULT_RETRY_DEAD_THRESHOLD = 2 * 60 * 1000 + 10 * 1000;

    /**
     * the constant TM_INTERCEPTOR_ORDER.
     */
    public const TM_INTERCEPTOR_ORDER = PHP_INT_MIN + 1000;

    /**
     * the constant TCC_ACTION_INTERCEPTOR_ORDER.
     */
    public const TCC_ACTION_INTERCEPTOR_ORDER = PHP_INT_MIN + 1000;
}
