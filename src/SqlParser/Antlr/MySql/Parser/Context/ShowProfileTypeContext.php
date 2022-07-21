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

class ShowProfileTypeContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_showProfileType;
    }

    public function ALL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ALL, 0);
    }

    public function BLOCK(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::BLOCK, 0);
    }

    public function IO(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::IO, 0);
    }

    public function CONTEXT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::CONTEXT, 0);
    }

    public function SWITCHES(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SWITCHES, 0);
    }

    public function CPU(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::CPU, 0);
    }

    public function IPC(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::IPC, 0);
    }

    public function MEMORY(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::MEMORY, 0);
    }

    public function PAGE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::PAGE, 0);
    }

    public function FAULTS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::FAULTS, 0);
    }

    public function SOURCE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SOURCE, 0);
    }

    public function SWAPS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SWAPS, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterShowProfileType($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitShowProfileType($this);
        }
    }
}
