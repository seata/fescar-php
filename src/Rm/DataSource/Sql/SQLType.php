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

    private static array $sqlType = [
        'BIT' => -7,
        'TINYINT' => -6,
        'SMALLINT' => 5,
        'INTEGER' => 4,
        'BIGINT' => -5,
        'FLOAT' => 6,
        'REAL' => 7,
        'DOUBLE' => 8,
        'NUMERIC' => 2,
        'DECIMAL' => 3,
        'CHAR' => 1,
        'VARCHAR' => 12,
        'LONGVARCHAR' => -1,
        'DATE' => 91,
        'TIME' => 92,
        'TIMESTAMP' => 93,
        'BINARY' => -2,
        'VARBINARY' => -3,
        'LONGVARBINARY' => -4,
        'NULL' => 0,
        'OTHER' => 1111,
        'JAVA_OBJECT' => 2000,
        'DISTINCT' => 2001,
        'STRUCT' => 2002,
        'ARRAY' => 2003,
        'BLOB' => 2004,
        'CLOB' => 2005,
        'REF' => 2006,
        'DATALINK' => 70,
        'BOOLEAN' => 16,
        'ROWID' => -8,
        'NCHAR' => -15,
        'NVARCHAR' => -9,
        'LONGNVARCHAR' => -16,
        'NCLOB' => 2011,
        'SQLXML' => 2009,
        'REF_CURSOR' => 2012,
        'TIME_WITH_TIMEZONE' => 2013,
        'TIMESTAMP_WITH_TIMEZONE' => 2014,
    ];

    public static function getSqlType(string $dataType)
    {
        return self::$sqlType[strtoupper($dataType)];
    }
}
