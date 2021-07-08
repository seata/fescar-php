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
namespace Hyperf\Seata\Rm\DataSource\Sql;

class SQLType
{
    /**
     * Select sql type.
     */
    public const SELECT = 0;

    /**
     * Insert sql type.
     */
    public const INSERT = 1;

    /**
     * Update sql type.
     */
    public const UPDATE = 2;

    /**
     * Delete sql type.
     */
    public const DELETE = 3;

    /**
     * Select for update sql type.
     */
    public const SELECT_FOR_UPDATE = 4;

    /**
     * Replace sql type.
     */
    public const REPLACE = 5;

    /**
     * Truncate sql type.
     */
    public const TRUNCATE = 6;

    /**
     * Create sql type.
     */
    public const CREATE = 7;

    /**
     * Drop sql type.
     */
    public const DROP = 8;

    /**
     * Load sql type.
     */
    public const LOAD = 9;

    /**
     * Merge sql type.
     */
    public const MERGE = 10;

    /**
     * Show sql type.
     */
    public const SHOW = 11;

    /**
     * Alter sql type.
     */
    public const ALTER = 12;

    /**
     * Rename sql type.
     */
    public const RENAME = 13;

    /**
     * Dump sql type.
     */
    public const DUMP = 14;

    /**
     * Debug sql type.
     */
    public const DEBUG = 15;

    /**
     * Explain sql type.
     */
    public const EXPLAIN = 16;

    /**
     * Stored procedure.
     */
    public const PROCEDURE = 17;

    /**
     * Desc sql type.
     */
    public const DESC = 18;

    /**
     * Select last insert id.
     */
    public const SELECT_LAST_INSERT_ID = 19;

    /**
     * Select without table sql type.
     */
    public const SELECT_WITHOUT_TABLE = 20;

    /**
     * Create sequence sql type.
     */
    public const CREATE_SEQUENCE = 21;

    /**
     * Show sequences sql type.
     */
    public const SHOW_SEQUENCES = 22;

    /**
     * Get sequence sql type.
     */
    public const GET_SEQUENCE = 23;

    /**
     * Alter sequence sql type.
     */
    public const ALTER_SEQUENCE = 24;

    /**
     * Drop sequence sql type.
     */
    public const DROP_SEQUENCE = 25;

    /**
     * Tddl show sql type.
     */
    public const TDDL_SHOW = 26;

    /**
     * Set sql type.
     */
    public const SET = 27;

    /**
     * Reload sql type.
     */
    public const RELOAD = 28;

    /**
     * Select union sql type.
     */
    public const SELECT_UNION = 29;

    /**
     * Create table sql type.
     */
    public const CREATE_TABLE = 30;

    /**
     * Drop table sql type.
     */
    public const DROP_TABLE = 31;

    /**
     * Alter table sql type.
     */
    public const ALTER_TABLE = 32;

    /**
     * Save point sql type.
     */
    public const SAVE_POINT = 33;

    /**
     * Select from update sql type.
     */
    public const SELECT_FROM_UPDATE = 34;

    /**
     * multi delete/update.
     */
    public const MULTI_DELETE = 35;

    /**
     * Multi update sql type.
     */
    public const MULTI_UPDATE = 36;

    /**
     * Create index sql type.
     */
    public const CREATE_INDEX = 37;

    /**
     * Drop index sql type.
     */
    public const DROP_INDEX = 38;

    /**
     * Kill sql type.
     */
    public const KILL = 39;

    /**
     * Release dblock sql type.
     */
    public const RELEASE_DBLOCK = 40;

    /**
     * Lock tables sql type.
     */
    public const LOCK_TABLES = 41;

    /**
     * Unlock tables sql type.
     */
    public const UNLOCK_TABLES = 42;

    /**
     * Check table sql type.
     */
    public const CHECK_TABLE = 43;

    /**
     * Select found rows.
     */
    public const SELECT_FOUND_ROWS = 44;

    /**
     * Insert ingore sql type.
     */
    public const INSERT_INGORE = 101;

    /**
     * Insert on duplicate update sql type.
     */
    public const INSERT_ON_DUPLICATE_UPDATE = 102;
}
