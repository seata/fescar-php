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
namespace Hyperf\Seata\SqlParser\Antlr\MySql\Listener;

use Hyperf\Seata\SqlParser\Antlr\MySql\Visit\StatementSqlVisitor;
use Hyperf\Seata\SqlParser\Antlr\MySqlContext;

class DeleteSpecificationSqlListener extends MySqlParserBaseListener
{
    private MySqlContext $sqlQueryContext;

    public function __construct(MySqlContext $mySqlContext)
    {
        $this->sqlQueryContext = $mySqlContext;
    }

    public function enterAtomTableItem(Context\AtomTableItemContext $ctx): void
    {
        $tableNameContext = $ctx->tableName();
        $this->sqlQueryContext->setTableName($tableNameContext->getText());
        $uid = $ctx->uid();
        $this->sqlQueryContext->setTableAlias($uid->getText());
        parent::enterAtomTableItem($ctx);
    }

    public function enterConstantExpressionAtom(Context\ConstantExpressionAtomContext $ctx): void
    {
        $this->sqlQueryContext->addDeleteWhereValColumnNames($ctx->getText());
        parent::enterConstantExpressionAtom($ctx);
    }

    public function enterFullColumnNameExpressionAtom(Context\FullColumnNameExpressionAtomContext $ctx): void
    {
        $this->sqlQueryContext->addDeleteWhereColumnNames($ctx->getText());
        parent::enterFullColumnNameExpressionAtom($ctx);
    }

    public function enterSingleDeleteStatement(Context\SingleDeleteStatementContext $ctx): void
    {
        $tableNameContext = $ctx->tableName();
        $this->sqlQueryContext->setTableName($tableNameContext->getText());
        $expression = $ctx->expression();
        $statementSqlVisitor = new StatementSqlVisitor();
        $text = $statementSqlVisitor->visit($expression)->toString();
        $this->sqlQueryContext->setWhereCondition($text);
        parent::enterSingleDeleteStatement($ctx);
    }

    public function enterMultipleDeleteStatement(Context\MultipleDeleteStatementContext $ctx): void
    {
        $expression = $ctx->expression();
        $statementSqlVisitor = new StatementSqlVisitor();
        $text = $statementSqlVisitor->visit($expression)->toString();
        $this->sqlQueryContext->setWhereCondition($text);
        parent::enterMultipleDeleteStatement($ctx);
    }

    public function enterInPredicate(Context\InPredicateContext $ctx): void
    {
        $statementSqlVisitor = new StatementSqlVisitor();
        $text = $statementSqlVisitor->visit($ctx)->toString();
        $this->sqlQueryContext->setWhereCondition($text);
        parent::enterInPredicate($ctx);
    }
}
