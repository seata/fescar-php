<?php

namespace Hyperf\Seata\SqlParser\Parser;

interface ParserInterface
{
    public function parser():array;

    public function getTableName():string;

    public function getTableAlias():?string;

    public function isDelete(): bool;

    public function isUpdate(): bool;

    public function isInsert(): bool;

    public function getOriginSql(): string;

    public function getDbType(): string;

    public function getResourceId(): string;

    public function getSqlType();
}