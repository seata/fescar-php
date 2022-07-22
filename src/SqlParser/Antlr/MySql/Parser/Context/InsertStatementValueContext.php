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
use Antlr\Antlr4\Runtime\Token;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use Antlr\Antlr4\Runtime\Tree\TerminalNode;
use Hyperf\Seata\SqlParser\Antlr\MySql\Listener\MySqlParserListener;
use Hyperf\Seata\SqlParser\Antlr\MySql\Parser\MySqlParser;

class InsertStatementValueContext extends ParserRuleContext
{
    /**
     * @var null|Token
     */
    public $insertFormat;

    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_insertStatementValue;
    }

    public function selectStatement(): ?SelectStatementContext
    {
        return $this->getTypedRuleContext(SelectStatementContext::class, 0);
    }

    /**
     * @return null|array<TerminalNode>|TerminalNode
     */
    public function LR_BRACKET(?int $index = null)
    {
        if ($index === null) {
            return $this->getTokens(MySqlParser::LR_BRACKET);
        }

        return $this->getToken(MySqlParser::LR_BRACKET, $index);
    }

    /**
     * @return null|array<TerminalNode>|TerminalNode
     */
    public function RR_BRACKET(?int $index = null)
    {
        if ($index === null) {
            return $this->getTokens(MySqlParser::RR_BRACKET);
        }

        return $this->getToken(MySqlParser::RR_BRACKET, $index);
    }

    public function VALUES(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::VALUES, 0);
    }

    public function VALUE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::VALUE, 0);
    }

    /**
     * @return null|array<ExpressionsWithDefaultsContext>|ExpressionsWithDefaultsContext
     */
    public function expressionsWithDefaults(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(ExpressionsWithDefaultsContext::class);
        }

        return $this->getTypedRuleContext(ExpressionsWithDefaultsContext::class, $index);
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
            $listener->enterInsertStatementValue($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitInsertStatementValue($this);
        }
    }
}
