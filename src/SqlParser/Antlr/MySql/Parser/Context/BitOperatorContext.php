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

class BitOperatorContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_bitOperator;
    }

    /**
     * @return null|array<TerminalNode>|TerminalNode
     */
    public function LESS_SYMBOL(?int $index = null)
    {
        if ($index === null) {
            return $this->getTokens(MySqlParser::LESS_SYMBOL);
        }

        return $this->getToken(MySqlParser::LESS_SYMBOL, $index);
    }

    /**
     * @return null|array<TerminalNode>|TerminalNode
     */
    public function GREATER_SYMBOL(?int $index = null)
    {
        if ($index === null) {
            return $this->getTokens(MySqlParser::GREATER_SYMBOL);
        }

        return $this->getToken(MySqlParser::GREATER_SYMBOL, $index);
    }

    public function BIT_AND_OP(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::BIT_AND_OP, 0);
    }

    public function BIT_XOR_OP(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::BIT_XOR_OP, 0);
    }

    public function BIT_OR_OP(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::BIT_OR_OP, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterBitOperator($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitBitOperator($this);
        }
    }
}
