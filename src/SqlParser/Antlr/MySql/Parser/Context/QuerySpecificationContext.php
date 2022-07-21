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
use Antlr\Antlr4\Runtime\Tree\TerminalNode;
use Hyperf\Seata\SqlParser\Antlr\MySql\Listener\MySqlParserListener;
use Hyperf\Seata\SqlParser\Antlr\MySql\Parser\MySqlParser;

class QuerySpecificationContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_querySpecification;
    }

    public function SELECT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SELECT, 0);
    }

    public function selectElements(): ?SelectElementsContext
    {
        return $this->getTypedRuleContext(SelectElementsContext::class, 0);
    }

    /**
     * @return null|array<SelectSpecContext>|SelectSpecContext
     */
    public function selectSpec(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(SelectSpecContext::class);
        }

        return $this->getTypedRuleContext(SelectSpecContext::class, $index);
    }

    public function selectIntoExpression(): ?SelectIntoExpressionContext
    {
        return $this->getTypedRuleContext(SelectIntoExpressionContext::class, 0);
    }

    public function fromClause(): ?FromClauseContext
    {
        return $this->getTypedRuleContext(FromClauseContext::class, 0);
    }

    public function groupByClause(): ?GroupByClauseContext
    {
        return $this->getTypedRuleContext(GroupByClauseContext::class, 0);
    }

    public function havingClause(): ?HavingClauseContext
    {
        return $this->getTypedRuleContext(HavingClauseContext::class, 0);
    }

    public function windowClause(): ?WindowClauseContext
    {
        return $this->getTypedRuleContext(WindowClauseContext::class, 0);
    }

    public function orderByClause(): ?OrderByClauseContext
    {
        return $this->getTypedRuleContext(OrderByClauseContext::class, 0);
    }

    public function limitClause(): ?LimitClauseContext
    {
        return $this->getTypedRuleContext(LimitClauseContext::class, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterQuerySpecification($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitQuerySpecification($this);
        }
    }
}
