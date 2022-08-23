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

class RollbackWorkContext extends ParserRuleContext
{
    /**
     * @var null|Token
     */
    public $nochain;

    /**
     * @var null|Token
     */
    public $norelease;

    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_rollbackWork;
    }

    public function ROLLBACK(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ROLLBACK, 0);
    }

    public function WORK(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::WORK, 0);
    }

    public function AND(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::AND, 0);
    }

    public function CHAIN(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::CHAIN, 0);
    }

    public function RELEASE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::RELEASE, 0);
    }

    /**
     * @return null|array<TerminalNode>|TerminalNode
     */
    public function NO(?int $index = null)
    {
        if ($index === null) {
            return $this->getTokens(MySqlParser::NO);
        }

        return $this->getToken(MySqlParser::NO, $index);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterRollbackWork($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitRollbackWork($this);
        }
    }
}
