<?php

namespace Hyperf\Seata\SqlParser\Core;

interface SQLInsertRecognizer extends SQLRecognizer
{
    /**
     * insert columns is empty.
     * @return true: empty. false: not empty.
     */
public function insertColumnsIsEmpty(): bool;

    /**
     * Gets insert columns.
     *
     */
public function getInsertColumns(): array;

    /**
     * Gets insert rows.
     *
     * @param primaryKeyIndex insert sql primary key index.
     * @return the insert rows
     */
public function getInsertRows(array $primaryKeyIndex): ?array;
}