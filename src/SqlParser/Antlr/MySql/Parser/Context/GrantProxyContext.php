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

class GrantProxyContext extends ParserRuleContext
{
    /**
     * @var null|UserNameContext
     */
    public $fromFirst;

    /**
     * @var null|UserNameContext
     */
    public $toFirst;

    /**
     * @var null|UserNameContext
     */
    public $userName;

    /**
     * @var null|array<UserNameContext>
     */
    public $toOther;

    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_grantProxy;
    }

    /**
     * @return null|array<TerminalNode>|TerminalNode
     */
    public function GRANT(?int $index = null)
    {
        if ($index === null) {
            return $this->getTokens(MySqlParser::GRANT);
        }

        return $this->getToken(MySqlParser::GRANT, $index);
    }

    public function PROXY(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::PROXY, 0);
    }

    public function ON(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ON, 0);
    }

    public function TO(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::TO, 0);
    }

    /**
     * @return null|array<UserNameContext>|UserNameContext
     */
    public function userName(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(UserNameContext::class);
        }

        return $this->getTypedRuleContext(UserNameContext::class, $index);
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

    public function WITH(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::WITH, 0);
    }

    public function OPTION(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::OPTION, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterGrantProxy($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitGrantProxy($this);
        }
    }
}
