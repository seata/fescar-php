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
namespace Hyperf\Seata\SqlParser\Antlr\MySql;

use Antlr\Antlr4\Runtime\CommonTokenStream;
use Antlr\Antlr4\Runtime\InputStream;
use Hyperf\Seata\SqlParser\Antlr\MySql\Parser\MySqlLexer;
use Hyperf\Seata\SqlParser\Antlr\MySql\Parser\MySqlParser;
use Hyperf\Seata\SqlParser\Antlr\MySql\Visit\StatementSqlVisitor;
use Hyperf\Seata\SqlParser\Antlr\SQLOperateRecognizerHolderFactory;
use Hyperf\Seata\SqlParser\Core\SQLRecognizerFactory;

class AntlrMySQLRecognizerFactory implements SQLRecognizerFactory
{
    public function create(string $sqlData, string $dbType)
    {
        // TODO: 待看清楚这里的处理方式
        $lexer = new MySqlLexer(InputStream::fromString($sqlData));

        $tokenStream = new CommonTokenStream($lexer);

        $parser = new MySqlParser($tokenStream);

        $sqlStatementsContext = $parser->sqlStatements();

        $sqlStatementContexts = $sqlStatementsContext->sqlStatement();

        $recognizers = null;
        $recognizer = null;

        foreach ($sqlStatementContexts as $sql) {
            $visitor = new StatementSqlVisitor();

            $originalSQL = $visitor->visit($sql);
            dump('$originalSQL：' . $sqlData);
            dump('==========================');

            $recognizerHolder = SQLOperateRecognizerHolderFactory::getSQLRecognizerHolder(strtolower($dbType));

            if ($sql->dmlStatement()->updateStatement() != null) {
                $recognizer = $recognizerHolder->getUpdateRecognizer($sqlData);
            } elseif ($sql->dmlStatement()->insertStatement() != null) {
                $recognizer = $recognizerHolder->getInsertRecognizer($sqlData);
            } elseif ($sql->dmlStatement()->deleteStatement() != null) {
                $recognizer = $recognizerHolder->getDeleteRecognizer($sqlData);
            } elseif ($sql->dmlStatement()->selectStatement() != null) {
                $recognizer = $recognizerHolder->getSelectForUpdateRecognizer($sqlData);
            }

            if (! isset($recognizers)) {
                $recognizers = [];
            }

            if (isset($recognizers) && ! empty($recognizer)) {
                $recognizers[] = $recognizer;
            }
        }

        return $recognizers;
    }
}
