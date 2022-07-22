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
namespace Hyperf\Seata\SqlParser\Antlr\MySql\Parser\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use Hyperf\Seata\SqlParser\Antlr\MySql\Listener\MySqlParserListener;
use Hyperf\Seata\SqlParser\Antlr\MySql\Parser\MySqlParser;

class SqlStatementContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_sqlStatement;
    }

    public function ddlStatement(): ?DdlStatementContext
    {
        return $this->getTypedRuleContext(DdlStatementContext::class, 0);
    }

    public function dmlStatement(): ?DmlStatementContext
    {
        return $this->getTypedRuleContext(DmlStatementContext::class, 0);
    }

    public function transactionStatement(): ?TransactionStatementContext
    {
        return $this->getTypedRuleContext(TransactionStatementContext::class, 0);
    }

    public function replicationStatement(): ?ReplicationStatementContext
    {
        return $this->getTypedRuleContext(ReplicationStatementContext::class, 0);
    }

    public function preparedStatement(): ?PreparedStatementContext
    {
        return $this->getTypedRuleContext(PreparedStatementContext::class, 0);
    }

    public function administrationStatement(): ?AdministrationStatementContext
    {
        return $this->getTypedRuleContext(AdministrationStatementContext::class, 0);
    }

    public function utilityStatement(): ?UtilityStatementContext
    {
        return $this->getTypedRuleContext(UtilityStatementContext::class, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterSqlStatement($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitSqlStatement($this);
        }
    }
}
