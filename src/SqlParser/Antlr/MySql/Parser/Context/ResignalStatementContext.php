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

class ResignalStatementContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_resignalStatement;
    }

    public function RESIGNAL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::RESIGNAL, 0);
    }

    public function ID(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ID, 0);
    }

    public function REVERSE_QUOTE_ID(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::REVERSE_QUOTE_ID, 0);
    }

    public function SET(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SET, 0);
    }

    /**
     * @return null|array<SignalConditionInformationContext>|SignalConditionInformationContext
     */
    public function signalConditionInformation(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(SignalConditionInformationContext::class);
        }

        return $this->getTypedRuleContext(SignalConditionInformationContext::class, $index);
    }

    public function SQLSTATE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SQLSTATE, 0);
    }

    public function stringLiteral(): ?StringLiteralContext
    {
        return $this->getTypedRuleContext(StringLiteralContext::class, 0);
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

    public function VALUE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::VALUE, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterResignalStatement($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitResignalStatement($this);
        }
    }
}
