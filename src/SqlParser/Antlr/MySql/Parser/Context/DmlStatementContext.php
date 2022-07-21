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
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use Hyperf\Seata\SqlParser\Antlr\MySql\Listener\MySqlParserListener;
use Hyperf\Seata\SqlParser\Antlr\MySql\Parser\MySqlParser;

class DmlStatementContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_dmlStatement;
    }

    public function selectStatement(): ?SelectStatementContext
    {
        return $this->getTypedRuleContext(SelectStatementContext::class, 0);
    }

    public function insertStatement(): ?InsertStatementContext
    {
        return $this->getTypedRuleContext(InsertStatementContext::class, 0);
    }

    public function updateStatement(): ?UpdateStatementContext
    {
        return $this->getTypedRuleContext(UpdateStatementContext::class, 0);
    }

    public function deleteStatement(): ?DeleteStatementContext
    {
        return $this->getTypedRuleContext(DeleteStatementContext::class, 0);
    }

    public function replaceStatement(): ?ReplaceStatementContext
    {
        return $this->getTypedRuleContext(ReplaceStatementContext::class, 0);
    }

    public function callStatement(): ?CallStatementContext
    {
        return $this->getTypedRuleContext(CallStatementContext::class, 0);
    }

    public function loadDataStatement(): ?LoadDataStatementContext
    {
        return $this->getTypedRuleContext(LoadDataStatementContext::class, 0);
    }

    public function loadXmlStatement(): ?LoadXmlStatementContext
    {
        return $this->getTypedRuleContext(LoadXmlStatementContext::class, 0);
    }

    public function doStatement(): ?DoStatementContext
    {
        return $this->getTypedRuleContext(DoStatementContext::class, 0);
    }

    public function handlerStatement(): ?HandlerStatementContext
    {
        return $this->getTypedRuleContext(HandlerStatementContext::class, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterDmlStatement($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitDmlStatement($this);
        }
    }
}
