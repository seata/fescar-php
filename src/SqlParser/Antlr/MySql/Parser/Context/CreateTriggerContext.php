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
use Antlr\Antlr4\Runtime\Token;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use Antlr\Antlr4\Runtime\Tree\TerminalNode;
use Hyperf\Seata\SqlParser\Antlr\MySql\Listener\MySqlParserListener;
use Hyperf\Seata\SqlParser\Antlr\MySql\Parser\MySqlParser;

class CreateTriggerContext extends ParserRuleContext
{
    /**
     * @var null|Token
     */
    public $triggerTime;

    /**
     * @var null|Token
     */
    public $triggerEvent;

    /**
     * @var null|Token
     */
    public $triggerPlace;

    /**
     * @var null|FullIdContext
     */
    public $thisTrigger;

    /**
     * @var null|FullIdContext
     */
    public $otherTrigger;

    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_createTrigger;
    }

    public function CREATE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::CREATE, 0);
    }

    public function TRIGGER(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::TRIGGER, 0);
    }

    public function ON(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ON, 0);
    }

    public function tableName(): ?TableNameContext
    {
        return $this->getTypedRuleContext(TableNameContext::class, 0);
    }

    public function FOR(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::FOR, 0);
    }

    public function EACH(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::EACH, 0);
    }

    public function ROW(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ROW, 0);
    }

    public function routineBody(): ?RoutineBodyContext
    {
        return $this->getTypedRuleContext(RoutineBodyContext::class, 0);
    }

    /**
     * @return null|array<FullIdContext>|FullIdContext
     */
    public function fullId(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(FullIdContext::class);
        }

        return $this->getTypedRuleContext(FullIdContext::class, $index);
    }

    public function BEFORE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::BEFORE, 0);
    }

    public function AFTER(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::AFTER, 0);
    }

    public function INSERT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::INSERT, 0);
    }

    public function UPDATE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::UPDATE, 0);
    }

    public function DELETE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::DELETE, 0);
    }

    public function ownerStatement(): ?OwnerStatementContext
    {
        return $this->getTypedRuleContext(OwnerStatementContext::class, 0);
    }

    public function FOLLOWS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::FOLLOWS, 0);
    }

    public function PRECEDES(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::PRECEDES, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterCreateTrigger($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitCreateTrigger($this);
        }
    }
}
