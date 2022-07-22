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

class ShowSchemaEntityContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_showSchemaEntity;
    }

    public function EVENTS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::EVENTS, 0);
    }

    public function TABLE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::TABLE, 0);
    }

    public function STATUS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::STATUS, 0);
    }

    public function TABLES(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::TABLES, 0);
    }

    public function FULL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::FULL, 0);
    }

    public function TRIGGERS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::TRIGGERS, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterShowSchemaEntity($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitShowSchemaEntity($this);
        }
    }
}
