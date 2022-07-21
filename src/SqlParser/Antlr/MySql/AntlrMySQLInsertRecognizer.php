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
namespace Hyperf\Seata\SqlParser\Antlr\MySql;

use Antlr\Antlr4\Runtime\CommonTokenStream;
use Hyperf\Seata\SqlParser\Antlr\MySql\Parser\MySqlLexer;
use Hyperf\Seata\SqlParser\Antlr\MySql\Parser\MySqlParser;
use Hyperf\Seata\SqlParser\Antlr\MySql\stream\ANTLRNoCaseStringStream;
use Hyperf\Seata\SqlParser\Antlr\MySql\Visit\InsertStatementSqlVisitor;
use Hyperf\Seata\SqlParser\Antlr\MySqlContext;
use Hyperf\Seata\SqlParser\Core\SQLInsertRecognizer;
use Hyperf\Seata\SqlParser\Core\SQLType;

class AntlrMySQLInsertRecognizer implements SQLInsertRecognizer
{
    private MySqlContext $sqlContext;

    public function __construct(string $sql)
    {
        $lexer = new MySqlLexer(new ANTLRNoCaseStringStream($sql));
        $tokenStream = new CommonTokenStream($lexer);

        $parser = new MySqlParser($tokenStream);
        $rootContext = $parser->root();
        $this->sqlContext = new MySqlContext();
        $this->sqlContext->setOriginalSQL($sql);
        $visitor = new InsertStatementSqlVisitor($this->sqlContext);
        $visitor->visit($rootContext);
    }

    public function insertColumnsIsEmpty(): bool
    {
        $insertColumnNames = $this->sqlContext->getInsertColumnNames();

        if (empty($insertColumnNames)) {
            return true;
        }

        return false;
    }

    public function getInsertColumns(): array
    {
        $insertColumnNames = $this->sqlContext->getInsertForValColumnNames();
        if (empty($insertColumnNames)) {
            return [];
        }
        return $insertColumnNames;
    }

    public function getInsertRows(array $primaryKeyIndex): ?array
    {
        return null;
    }

    public function getSQLType(): SQLType
    {
        return new SQLType(SQLType::INSERT);
    }

    public function getTableAlias(): string
    {
        return $this->sqlContext->getTableAlias();
    }

    public function getTableName(): string
    {
        return $this->sqlContext->getTableName();
    }

    public function getOriginalSQL(): string
    {
        return $this->sqlContext->getOriginalSQL();
    }
}
