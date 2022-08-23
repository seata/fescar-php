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

class SelectLinesIntoContext extends ParserRuleContext
{
    /**
     * @var null|Token
     */
    public $starting;

    /**
     * @var null|Token
     */
    public $terminationLine;

    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_selectLinesInto;
    }

    public function STARTING(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::STARTING, 0);
    }

    public function BY(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::BY, 0);
    }

    public function STRING_LITERAL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::STRING_LITERAL, 0);
    }

    public function TERMINATED(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::TERMINATED, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterSelectLinesInto($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitSelectLinesInto($this);
        }
    }
}
