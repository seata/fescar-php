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

class IfStatementContext extends ParserRuleContext
{
    /**
     * @var null|ProcedureSqlStatementContext
     */
    public $procedureSqlStatement;

    /**
     * @var null|array<ProcedureSqlStatementContext>
     */
    public $thenStatements;

    /**
     * @var null|array<ProcedureSqlStatementContext>
     */
    public $elseStatements;

    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_ifStatement;
    }

    /**
     * @return null|array<TerminalNode>|TerminalNode
     */
    public function IF(?int $index = null)
    {
        if ($index === null) {
            return $this->getTokens(MySqlParser::IF);
        }

        return $this->getToken(MySqlParser::IF, $index);
    }

    public function expression(): ?ExpressionContext
    {
        return $this->getTypedRuleContext(ExpressionContext::class, 0);
    }

    public function THEN(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::THEN, 0);
    }

    public function END(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::END, 0);
    }

    /**
     * @return null|array<ElifAlternativeContext>|ElifAlternativeContext
     */
    public function elifAlternative(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(ElifAlternativeContext::class);
        }

        return $this->getTypedRuleContext(ElifAlternativeContext::class, $index);
    }

    public function ELSE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ELSE, 0);
    }

    /**
     * @return null|array<ProcedureSqlStatementContext>|ProcedureSqlStatementContext
     */
    public function procedureSqlStatement(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(ProcedureSqlStatementContext::class);
        }

        return $this->getTypedRuleContext(ProcedureSqlStatementContext::class, $index);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterIfStatement($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitIfStatement($this);
        }
    }
}
