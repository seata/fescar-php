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

class CreateViewContext extends ParserRuleContext
{
    /**
     * @var null|Token
     */
    public $algType;

    /**
     * @var null|Token
     */
    public $secContext;

    /**
     * @var null|Token
     */
    public $checkOption;

    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_createView;
    }

    public function CREATE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::CREATE, 0);
    }

    public function VIEW(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::VIEW, 0);
    }

    public function fullId(): ?FullIdContext
    {
        return $this->getTypedRuleContext(FullIdContext::class, 0);
    }

    public function AS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::AS, 0);
    }

    public function selectStatement(): ?SelectStatementContext
    {
        return $this->getTypedRuleContext(SelectStatementContext::class, 0);
    }

    public function OR(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::OR, 0);
    }

    public function REPLACE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::REPLACE, 0);
    }

    public function ALGORITHM(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ALGORITHM, 0);
    }

    public function EQUAL_SYMBOL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::EQUAL_SYMBOL, 0);
    }

    public function ownerStatement(): ?OwnerStatementContext
    {
        return $this->getTypedRuleContext(OwnerStatementContext::class, 0);
    }

    public function SQL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SQL, 0);
    }

    public function SECURITY(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SECURITY, 0);
    }

    public function LR_BRACKET(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LR_BRACKET, 0);
    }

    public function uidList(): ?UidListContext
    {
        return $this->getTypedRuleContext(UidListContext::class, 0);
    }

    public function RR_BRACKET(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::RR_BRACKET, 0);
    }

    public function WITH(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::WITH, 0);
    }

    public function CHECK(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::CHECK, 0);
    }

    public function OPTION(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::OPTION, 0);
    }

    public function UNDEFINED(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::UNDEFINED, 0);
    }

    public function MERGE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::MERGE, 0);
    }

    public function TEMPTABLE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::TEMPTABLE, 0);
    }

    public function DEFINER(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::DEFINER, 0);
    }

    public function INVOKER(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::INVOKER, 0);
    }

    public function CASCADED(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::CASCADED, 0);
    }

    public function LOCAL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LOCAL, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterCreateView($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitCreateView($this);
        }
    }
}
