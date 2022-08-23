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

class ShowCommonEntityContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_showCommonEntity;
    }

    public function CHARACTER(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::CHARACTER, 0);
    }

    public function SET(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SET, 0);
    }

    public function COLLATION(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::COLLATION, 0);
    }

    public function DATABASES(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::DATABASES, 0);
    }

    public function SCHEMAS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SCHEMAS, 0);
    }

    public function FUNCTION(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::FUNCTION, 0);
    }

    public function STATUS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::STATUS, 0);
    }

    public function PROCEDURE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::PROCEDURE, 0);
    }

    public function VARIABLES(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::VARIABLES, 0);
    }

    public function GLOBAL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::GLOBAL, 0);
    }

    public function SESSION(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SESSION, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterShowCommonEntity($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitShowCommonEntity($this);
        }
    }
}
