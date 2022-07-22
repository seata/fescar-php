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
use Hyperf\Seata\SqlParser\Antlr\MySql\Listener\MySqlParserListener;
use Hyperf\Seata\SqlParser\Antlr\MySql\Parser\MySqlParser;

class HandlerStatementContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_handlerStatement;
    }

    public function handlerOpenStatement(): ?HandlerOpenStatementContext
    {
        return $this->getTypedRuleContext(HandlerOpenStatementContext::class, 0);
    }

    public function handlerReadIndexStatement(): ?HandlerReadIndexStatementContext
    {
        return $this->getTypedRuleContext(HandlerReadIndexStatementContext::class, 0);
    }

    public function handlerReadStatement(): ?HandlerReadStatementContext
    {
        return $this->getTypedRuleContext(HandlerReadStatementContext::class, 0);
    }

    public function handlerCloseStatement(): ?HandlerCloseStatementContext
    {
        return $this->getTypedRuleContext(HandlerCloseStatementContext::class, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterHandlerStatement($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitHandlerStatement($this);
        }
    }
}
