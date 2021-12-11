<?php

namespace Hyperf\Seata\SqlParser\Core;


interface SQLRecognizer
{
    /**
     * Type of the SQL. INSERT/UPDATE/DELETE ...
     *
     */
    public function getSQLType(): SQLType;

    /**
     * TableRecords source related in the SQL, including alias if any.
     * SELECT id, name FROM user u WHERE ...
     * Alias should be 'u' for this SQL.
     *
     */
    public function getTableAlias(): string;

    /**
     * TableRecords name related in the SQL.
     * SELECT id, name FROM user u WHERE ...
     * TableRecords name should be 'user' for this SQL, without alias 'u'.
     *
     * @see #getTableAlias() #getTableAlias()#getTableAlias()
     */
    public function getTableName(): string;

    /**
     * Return the original SQL input by the upper application.
     *
     */
    public function getOriginalSQL(): string;
}