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

class BlockStatementContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_blockStatement;
    }

    public function BEGIN(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::BEGIN, 0);
    }

    public function END(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::END, 0);
    }

    /**
     * @return null|array<UidContext>|UidContext
     */
    public function uid(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(UidContext::class);
        }

        return $this->getTypedRuleContext(UidContext::class, $index);
    }

    public function COLON_SYMB(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::COLON_SYMB, 0);
    }

    /**
     * @return null|array<DeclareVariableContext>|DeclareVariableContext
     */
    public function declareVariable(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(DeclareVariableContext::class);
        }

        return $this->getTypedRuleContext(DeclareVariableContext::class, $index);
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
     * @return null|array<DeclareConditionContext>|DeclareConditionContext
     */
    public function declareCondition(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(DeclareConditionContext::class);
        }

        return $this->getTypedRuleContext(DeclareConditionContext::class, $index);
    }

    /**
     * @return null|array<DeclareCursorContext>|DeclareCursorContext
     */
    public function declareCursor(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(DeclareCursorContext::class);
        }

        return $this->getTypedRuleContext(DeclareCursorContext::class, $index);
    }

    /**
     * @return null|array<DeclareHandlerContext>|DeclareHandlerContext
     */
    public function declareHandler(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(DeclareHandlerContext::class);
        }

        return $this->getTypedRuleContext(DeclareHandlerContext::class, $index);
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
            $listener->enterBlockStatement($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitBlockStatement($this);
        }
    }
}
