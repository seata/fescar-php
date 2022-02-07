<?php

namespace Hyperf\Seata\SqlParser\Parser;

use Hyperf\Seata\SqlParser\Core\SQLType;
use PHPSQLParser\PHPSQLParser;

class MySqlParser implements ParserInterface
{
    private PHPSQLParser $parser;

    private string $sql;

    private array $sqlStatement = [];

    private string $resourceId = '';

    public function __construct(string $sql)
    {
        $this->parser = new PHPSQLParser();
        $parsed = $this->parser->parse($sql);
        $this->sqlStatement = $parsed;
        $this->sql = $sql;
    }

    public function parser(): array
    {
        return $this->sqlStatement;
    }

    public function getOriginSql(): string
    {
        return $this->sql;
    }

    public function getTableName():string
    {
       return $this->sqlStatement['FROM'][0]['table'] ?? '';
    }

    public function getTableAlias():?string
    {
        if (! ($this->sqlStatement['FROM'][0]['alias'] ?? false)) {
            return null;
        }
        return $this->sqlStatement['FROM'][0]['alias'];
    }

    public function isDelete(): bool
    {
        return isset($this->sqlStatement['DELETE']);
    }

    public function isUpdate(): bool
    {
        return isset($this->sqlStatement['UPDATE']);
    }

    public function isInsert(): bool
    {
        return isset($this->sqlStatement['INSERT']);
    }

    public function getDbType(): string
    {
        return 'MySql';
    }

    public function getResourceId(): string
    {
        return $this->resourceId;
    }

    public function setResourceId(string $resourceId): MySqlParser
    {
        $this->resourceId = $resourceId;
        return $this;
    }


    public function getSqlType(): int
    {
        if ($this->isDelete()) {
            return SQLType::DELETE;
        }
        // TODO 抛异常
        return 0;
    }
}