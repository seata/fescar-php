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
use Antlr\Antlr4\Runtime\Tree\TerminalNode;
use Hyperf\Seata\SqlParser\Antlr\MySql\Listener\MySqlParserListener;
use Hyperf\Seata\SqlParser\Antlr\MySql\Parser\MySqlParser;

class SqlStatementsContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_sqlStatements;
    }

    /**
     * @return null|array<SqlStatementContext>|SqlStatementContext
     */
    public function sqlStatement(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(SqlStatementContext::class);
        }
        return $this->getTypedRuleContext(SqlStatementContext::class, $index);
    }

    /**
     * @return null|array<EmptyStatementContext>|EmptyStatementContext
     */
    public function emptyStatement(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(EmptyStatementContext::class);
        }

        return $this->getTypedRuleContext(EmptyStatementContext::class, $index);
    }

    /**
     * @return null|array<TerminalNode>|TerminalNode
     */
    public function SEMI(?int $index = null)
    {
        if ($index === null) {
            return $this->getTokens(MySqlParser::SEMI);
        }

        return $this->getToken(MySqlParser::SEMI, $index);
    }

    /**
     * @return null|array<TerminalNode>|TerminalNode
     */
    public function MINUS(?int $index = null)
    {
        if ($index === null) {
            return $this->getTokens(MySqlParser::MINUS);
        }

        return $this->getToken(MySqlParser::MINUS, $index);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterSqlStatements($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitSqlStatements($this);
        }
    }
}
