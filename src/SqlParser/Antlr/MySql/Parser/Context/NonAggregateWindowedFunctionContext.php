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

class NonAggregateWindowedFunctionContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_nonAggregateWindowedFunction;
    }

    public function LR_BRACKET(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LR_BRACKET, 0);
    }

    public function expression(): ?ExpressionContext
    {
        return $this->getTypedRuleContext(ExpressionContext::class, 0);
    }

    public function RR_BRACKET(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::RR_BRACKET, 0);
    }

    public function overClause(): ?OverClauseContext
    {
        return $this->getTypedRuleContext(OverClauseContext::class, 0);
    }

    public function LAG(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LAG, 0);
    }

    public function LEAD(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LEAD, 0);
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
     * @return null|array<DecimalLiteralContext>|DecimalLiteralContext
     */
    public function decimalLiteral(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(DecimalLiteralContext::class);
        }

        return $this->getTypedRuleContext(DecimalLiteralContext::class, $index);
    }

    public function FIRST_VALUE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::FIRST_VALUE, 0);
    }

    public function LAST_VALUE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LAST_VALUE, 0);
    }

    public function CUME_DIST(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::CUME_DIST, 0);
    }

    public function DENSE_RANK(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::DENSE_RANK, 0);
    }

    public function PERCENT_RANK(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::PERCENT_RANK, 0);
    }

    public function RANK(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::RANK, 0);
    }

    public function ROW_NUMBER(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ROW_NUMBER, 0);
    }

    public function NTH_VALUE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::NTH_VALUE, 0);
    }

    public function NTILE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::NTILE, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterNonAggregateWindowedFunction($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitNonAggregateWindowedFunction($this);
        }
    }
}
