<?php

namespace Hyperf\Seata\Rm\DataSource\Sql;


class SQLType
{

    /**
     * Select sql type.
     */
    const SELECT = 0;
    /**
     * Insert sql type.
     */
    const INSERT = 1;
    /**
     * Update sql type.
     */
    const UPDATE = 2;
    /**
     * Delete sql type.
     */
    const DELETE = 3;
    /**
     * Select for update sql type.
     */
    const SELECT_FOR_UPDATE = 4;
    /**
     * Replace sql type.
     */
    const REPLACE = 5;
    /**
     * Truncate sql type.
     */
    const TRUNCATE = 6;
    /**
     * Create sql type.
     */
    const CREATE = 7;
    /**
     * Drop sql type.
     */
    const DROP = 8;
    /**
     * Load sql type.
     */
    const LOAD = 9;
    /**
     * Merge sql type.
     */
    const MERGE = 10;
    /**
     * Show sql type.
     */
    const SHOW = 11;
    /**
     * Alter sql type.
     */
    const ALTER = 12;
    /**
     * Rename sql type.
     */
    const RENAME = 13;
    /**
     * Dump sql type.
     */
    const DUMP = 14;
    /**
     * Debug sql type.
     */
    const DEBUG = 15;
    /**
     * Explain sql type.
     */
    const EXPLAIN = 16;
    /**
     * Stored procedure
     */
    const PROCEDURE = 17;
    /**
     * Desc sql type.
     */
    const DESC = 18;
    /**
     * Select last insert id
     */
    const SELECT_LAST_INSERT_ID = 19;
    /**
     * Select without table sql type.
     */
    const SELECT_WITHOUT_TABLE = 20;
    /**
     * Create sequence sql type.
     */
    const CREATE_SEQUENCE = 21;
    /**
     * Show sequences sql type.
     */
    const SHOW_SEQUENCES = 22;
    /**
     * Get sequence sql type.
     */
    const GET_SEQUENCE = 23;
    /**
     * Alter sequence sql type.
     */
    const ALTER_SEQUENCE = 24;
    /**
     * Drop sequence sql type.
     */
    const DROP_SEQUENCE = 25;
    /**
     * Tddl show sql type.
     */
    const TDDL_SHOW = 26;
    /**
     * Set sql type.
     */
    const SET = 27;
    /**
     * Reload sql type.
     */
    const RELOAD = 28;
    /**
     * Select union sql type.
     */
    const SELECT_UNION = 29;
    /**
     * Create table sql type.
     */
    const CREATE_TABLE = 30;
    /**
     * Drop table sql type.
     */
    const DROP_TABLE = 31;
    /**
     * Alter table sql type.
     */
    const ALTER_TABLE = 32;
    /**
     * Save point sql type.
     */
    const SAVE_POINT = 33;
    /**
     * Select from update sql type.
     */
    const SELECT_FROM_UPDATE = 34;
    /**
     * multi delete/update
     */
    const MULTI_DELETE = 35;
    /**
     * Multi update sql type.
     */
    const MULTI_UPDATE = 36;
    /**
     * Create index sql type.
     */
    const CREATE_INDEX = 37;
    /**
     * Drop index sql type.
     */
    const DROP_INDEX = 38;
    /**
     * Kill sql type.
     */
    const KILL = 39;
    /**
     * Release dblock sql type.
     */
    const RELEASE_DBLOCK = 40;
    /**
     * Lock tables sql type.
     */
    const LOCK_TABLES = 41;
    /**
     * Unlock tables sql type.
     */
    const UNLOCK_TABLES = 42;
    /**
     * Check table sql type.
     */
    const CHECK_TABLE = 43;

    /**
     * Select found rows.
     */
    const SELECT_FOUND_ROWS = 44;

    /**
     * Insert ingore sql type.
     */
    const INSERT_INGORE = 101;
    /**
     * Insert on duplicate update sql type.
     */
    const INSERT_ON_DUPLICATE_UPDATE = 102;


    private static array $sqlType = [
        'BIT'=>                    -7,
        'TINYINT'=>                -6,
        'SMALLINT'=>               5,
        'INTEGER'=>                4,
        'BIGINT'=>                 -5,
        'FLOAT'=>                  6,
        'REAL'=>                   7,
        'DOUBLE'=>                 8,
        'NUMERIC'=>                2,
        'DECIMAL'=>                3,
        'CHAR'=>                   1,
        'VARCHAR'=>                12,
        'LONGVARCHAR'=>            -1,
        'DATE'=>                   91,
        'TIME'=>                   92,
        'TIMESTAMP'=>              93,
        'BINARY'=>                 -2,
        'VARBINARY'=>              -3,
        'LONGVARBINARY'=>          -4,
        'NULL'=>                   0,
        'OTHER'=>                  1111,
        'JAVA_OBJECT'=>            2000,
        'DISTINCT'=>               2001,
        'STRUCT'=>                 2002,
        'ARRAY'=>                  2003,
        'BLOB'=>                   2004,
        'CLOB'=>                   2005,
        'REF'=>                    2006,
        'DATALINK'=>               70,
        'BOOLEAN'=>                16,
        'ROWID'=>                  -8,
        'NCHAR'=>                  -15,
        'NVARCHAR'=>               -9,
        'LONGNVARCHAR'=>           -16,
        'NCLOB'=>                  2011,
        'SQLXML'=>                 2009,
        'REF_CURSOR'=>             2012,
        'TIME_WITH_TIMEZONE'=>     2013,
        'TIMESTAMP_WITH_TIMEZONE'=>2014,
    ];

    public static function getSqlType(string $dataType)
    {
        return self::$sqlType[strtoupper($dataType)];
    }

}