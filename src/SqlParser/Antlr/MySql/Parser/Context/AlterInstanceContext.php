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

class AlterInstanceContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_alterInstance;
    }

    public function ALTER(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ALTER, 0);
    }

    public function INSTANCE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::INSTANCE, 0);
    }

    public function ROTATE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ROTATE, 0);
    }

    public function INNODB(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::INNODB, 0);
    }

    public function MASTER(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::MASTER, 0);
    }

    public function KEY(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::KEY, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterAlterInstance($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitAlterInstance($this);
        }
    }
}
