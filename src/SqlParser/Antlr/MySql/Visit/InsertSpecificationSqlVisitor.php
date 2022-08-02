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
namespace Hyperf\Seata\SqlParser\Antlr\MySql\Visit;

use Hyperf\Seata\SqlParser\Antlr\MySqlContext;

class InsertSpecificationSqlVisitor extends MySqlParserBaseVisitor
{
    private MySqlContext $mySqlContext;

    public function __construct(MySqlContext $mySqlContext)
    {
        $this->mySqlContext = $mySqlContext;
    }

    public function visitInsertStatement(Context\InsertStatementContext $context)
    {
        $tableNameContext = $context->tableName();

        $this->mySqlContext->setTableName($tableNameContext->getText());

        $columns = $context->columns;

        $strings = implode(',', $columns);

        foreach ($strings as $insertColumnName) {
            $this->mySqlContext->addForInsertColumnName($insertColumnName);
        }

        $insertStatementValueContext = $context->insertStatementValue();

        $expressionsWithDefaultsContexts = $insertStatementValueContext->expressionsWithDefaults();

        foreach ($expressionsWithDefaultsContexts as $expressions) {
            $text = $expressions->getText();
            $str = null;

            if (strpos($text, "'") !== false) {
                $str = str_replace("'", '', $text);
            } elseif (strpos($text, '"') !== false) {
                $str = str_replace('"', '', $text);
            } else {
                $str = $text;
            }

            if (! empty($str) && strpos("'") === false && strpos('"') === false) {
                $this->mySqlContext->addForInsertValColumnName(explode(',', $str));
            }
        }
        $this->mySqlContext->setInsertRows(count($expressionsWithDefaultsContexts));
        return $this->mySqlContext;
    }
}
