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

use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use Antlr\Antlr4\Runtime\Tree\TerminalNode;
use Hyperf\Seata\SqlParser\Antlr\MySql\Listener\MySqlParserListener;
use Hyperf\Seata\SqlParser\Antlr\MySql\Parser\MySqlParser;

class SimpleFlushOptionContext extends FlushOptionContext
{
    public function __construct(FlushOptionContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function DES_KEY_FILE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::DES_KEY_FILE, 0);
    }

    public function HOSTS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::HOSTS, 0);
    }

    public function LOGS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LOGS, 0);
    }

    public function OPTIMIZER_COSTS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::OPTIMIZER_COSTS, 0);
    }

    public function PRIVILEGES(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::PRIVILEGES, 0);
    }

    public function QUERY(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::QUERY, 0);
    }

    public function CACHE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::CACHE, 0);
    }

    public function STATUS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::STATUS, 0);
    }

    public function USER_RESOURCES(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::USER_RESOURCES, 0);
    }

    public function TABLES(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::TABLES, 0);
    }

    public function WITH(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::WITH, 0);
    }

    public function READ(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::READ, 0);
    }

    public function LOCK(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LOCK, 0);
    }

    public function BINARY(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::BINARY, 0);
    }

    public function ENGINE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ENGINE, 0);
    }

    public function ERROR(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ERROR, 0);
    }

    public function GENERAL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::GENERAL, 0);
    }

    public function RELAY(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::RELAY, 0);
    }

    public function SLOW(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SLOW, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterSimpleFlushOption($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitSimpleFlushOption($this);
        }
    }
}
