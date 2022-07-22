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

class CompoundStatementContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_compoundStatement;
    }

    public function blockStatement(): ?BlockStatementContext
    {
        return $this->getTypedRuleContext(BlockStatementContext::class, 0);
    }

    public function caseStatement(): ?CaseStatementContext
    {
        return $this->getTypedRuleContext(CaseStatementContext::class, 0);
    }

    public function ifStatement(): ?IfStatementContext
    {
        return $this->getTypedRuleContext(IfStatementContext::class, 0);
    }

    public function leaveStatement(): ?LeaveStatementContext
    {
        return $this->getTypedRuleContext(LeaveStatementContext::class, 0);
    }

    public function loopStatement(): ?LoopStatementContext
    {
        return $this->getTypedRuleContext(LoopStatementContext::class, 0);
    }

    public function repeatStatement(): ?RepeatStatementContext
    {
        return $this->getTypedRuleContext(RepeatStatementContext::class, 0);
    }

    public function whileStatement(): ?WhileStatementContext
    {
        return $this->getTypedRuleContext(WhileStatementContext::class, 0);
    }

    public function iterateStatement(): ?IterateStatementContext
    {
        return $this->getTypedRuleContext(IterateStatementContext::class, 0);
    }

    public function returnStatement(): ?ReturnStatementContext
    {
        return $this->getTypedRuleContext(ReturnStatementContext::class, 0);
    }

    public function cursorStatement(): ?CursorStatementContext
    {
        return $this->getTypedRuleContext(CursorStatementContext::class, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterCompoundStatement($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitCompoundStatement($this);
        }
    }
}
