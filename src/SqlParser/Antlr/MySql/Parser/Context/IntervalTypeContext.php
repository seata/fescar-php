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

class IntervalTypeContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_intervalType;
    }

    public function intervalTypeBase(): ?IntervalTypeBaseContext
    {
        return $this->getTypedRuleContext(IntervalTypeBaseContext::class, 0);
    }

    public function YEAR(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::YEAR, 0);
    }

    public function YEAR_MONTH(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::YEAR_MONTH, 0);
    }

    public function DAY_HOUR(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::DAY_HOUR, 0);
    }

    public function DAY_MINUTE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::DAY_MINUTE, 0);
    }

    public function DAY_SECOND(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::DAY_SECOND, 0);
    }

    public function HOUR_MINUTE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::HOUR_MINUTE, 0);
    }

    public function HOUR_SECOND(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::HOUR_SECOND, 0);
    }

    public function MINUTE_SECOND(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::MINUTE_SECOND, 0);
    }

    public function SECOND_MICROSECOND(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SECOND_MICROSECOND, 0);
    }

    public function MINUTE_MICROSECOND(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::MINUTE_MICROSECOND, 0);
    }

    public function HOUR_MICROSECOND(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::HOUR_MICROSECOND, 0);
    }

    public function DAY_MICROSECOND(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::DAY_MICROSECOND, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterIntervalType($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitIntervalType($this);
        }
    }
}
