<?php

declare(strict_types=1);
/**
 * Copyright 1999-2022 Seata.io Group.
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

class LogicalOperatorContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_logicalOperator;
    }

    public function AND(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::AND, 0);
    }

    /**
     * @return null|array<TerminalNode>|TerminalNode
     */
    public function BIT_AND_OP(?int $index = null)
    {
        if ($index === null) {
            return $this->getTokens(MySqlParser::BIT_AND_OP);
        }

        return $this->getToken(MySqlParser::BIT_AND_OP, $index);
    }

    public function XOR(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::XOR, 0);
    }

    public function OR(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::OR, 0);
    }

    /**
     * @return null|array<TerminalNode>|TerminalNode
     */
    public function BIT_OR_OP(?int $index = null)
    {
        if ($index === null) {
            return $this->getTokens(MySqlParser::BIT_OR_OP);
        }

        return $this->getToken(MySqlParser::BIT_OR_OP, $index);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterLogicalOperator($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitLogicalOperator($this);
        }
    }
}
