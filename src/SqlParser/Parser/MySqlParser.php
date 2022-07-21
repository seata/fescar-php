<?php

declare(strict_types=1);
/**
 * Copyright 1999-2022 Seata.io Group.
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

    public function getTableName(): string
    {
        return $this->sqlStatement['FROM'][0]['table'] ?? '';
    }

    public function getTableAlias(): ?string
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
