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

class CreateProcedureContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_createProcedure;
    }

    public function CREATE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::CREATE, 0);
    }

    public function PROCEDURE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::PROCEDURE, 0);
    }

    public function fullId(): ?FullIdContext
    {
        return $this->getTypedRuleContext(FullIdContext::class, 0);
    }

    public function LR_BRACKET(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LR_BRACKET, 0);
    }

    public function RR_BRACKET(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::RR_BRACKET, 0);
    }

    public function routineBody(): ?RoutineBodyContext
    {
        return $this->getTypedRuleContext(RoutineBodyContext::class, 0);
    }

    public function ownerStatement(): ?OwnerStatementContext
    {
        return $this->getTypedRuleContext(OwnerStatementContext::class, 0);
    }

    /**
     * @return null|array<ProcedureParameterContext>|ProcedureParameterContext
     */
    public function procedureParameter(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(ProcedureParameterContext::class);
        }

        return $this->getTypedRuleContext(ProcedureParameterContext::class, $index);
    }

    /**
     * @return null|array<TerminalNode>|TerminalNode
     */
    public function COMMA(?int $index = null)
    {
        if ($index === null) {
            return $this->getTokens(MySqlParser::COMMA);
        }

        return $this->getToken(MySqlParser::COMMA, $index);
    }

    /**
     * @return null|array<RoutineOptionContext>|RoutineOptionContext
     */
    public function routineOption(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(RoutineOptionContext::class);
        }

        return $this->getTypedRuleContext(RoutineOptionContext::class, $index);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterCreateProcedure($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitCreateProcedure($this);
        }
    }
}
