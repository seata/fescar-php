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

class ShowGlobalInfoClauseContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_showGlobalInfoClause;
    }

    public function ENGINES(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ENGINES, 0);
    }

    public function STORAGE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::STORAGE, 0);
    }

    public function MASTER(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::MASTER, 0);
    }

    public function STATUS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::STATUS, 0);
    }

    public function PLUGINS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::PLUGINS, 0);
    }

    public function PRIVILEGES(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::PRIVILEGES, 0);
    }

    public function PROCESSLIST(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::PROCESSLIST, 0);
    }

    public function FULL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::FULL, 0);
    }

    public function PROFILES(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::PROFILES, 0);
    }

    public function SLAVE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SLAVE, 0);
    }

    public function HOSTS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::HOSTS, 0);
    }

    public function AUTHORS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::AUTHORS, 0);
    }

    public function CONTRIBUTORS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::CONTRIBUTORS, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterShowGlobalInfoClause($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitShowGlobalInfoClause($this);
        }
    }
}
