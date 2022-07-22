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

class DiagnosticsStatementContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_diagnosticsStatement;
    }

    public function GET(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::GET, 0);
    }

    public function DIAGNOSTICS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::DIAGNOSTICS, 0);
    }

    public function CURRENT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::CURRENT, 0);
    }

    public function STACKED(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::STACKED, 0);
    }

    /**
     * @return null|array<VariableClauseContext>|VariableClauseContext
     */
    public function variableClause(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(VariableClauseContext::class);
        }

        return $this->getTypedRuleContext(VariableClauseContext::class, $index);
    }

    /**
     * @return null|array<TerminalNode>|TerminalNode
     */
    public function EQUAL_SYMBOL(?int $index = null)
    {
        if ($index === null) {
            return $this->getTokens(MySqlParser::EQUAL_SYMBOL);
        }

        return $this->getToken(MySqlParser::EQUAL_SYMBOL, $index);
    }

    public function CONDITION(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::CONDITION, 0);
    }

    /**
     * @return null|array<DiagnosticsConditionInformationNameContext>|DiagnosticsConditionInformationNameContext
     */
    public function diagnosticsConditionInformationName(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(DiagnosticsConditionInformationNameContext::class);
        }

        return $this->getTypedRuleContext(DiagnosticsConditionInformationNameContext::class, $index);
    }

    /**
     * @return null|array<TerminalNode>|TerminalNode
     */
    public function NUMBER(?int $index = null)
    {
        if ($index === null) {
            return $this->getTokens(MySqlParser::NUMBER);
        }

        return $this->getToken(MySqlParser::NUMBER, $index);
    }

    /**
     * @return null|array<TerminalNode>|TerminalNode
     */
    public function ROW_COUNT(?int $index = null)
    {
        if ($index === null) {
            return $this->getTokens(MySqlParser::ROW_COUNT);
        }

        return $this->getToken(MySqlParser::ROW_COUNT, $index);
    }

    public function decimalLiteral(): ?DecimalLiteralContext
    {
        return $this->getTypedRuleContext(DecimalLiteralContext::class, 0);
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

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterDiagnosticsStatement($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitDiagnosticsStatement($this);
        }
    }
}
