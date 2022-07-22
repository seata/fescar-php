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

class UtilityStatementContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_utilityStatement;
    }

    public function simpleDescribeStatement(): ?SimpleDescribeStatementContext
    {
        return $this->getTypedRuleContext(SimpleDescribeStatementContext::class, 0);
    }

    public function fullDescribeStatement(): ?FullDescribeStatementContext
    {
        return $this->getTypedRuleContext(FullDescribeStatementContext::class, 0);
    }

    public function helpStatement(): ?HelpStatementContext
    {
        return $this->getTypedRuleContext(HelpStatementContext::class, 0);
    }

    public function useStatement(): ?UseStatementContext
    {
        return $this->getTypedRuleContext(UseStatementContext::class, 0);
    }

    public function signalStatement(): ?SignalStatementContext
    {
        return $this->getTypedRuleContext(SignalStatementContext::class, 0);
    }

    public function resignalStatement(): ?ResignalStatementContext
    {
        return $this->getTypedRuleContext(ResignalStatementContext::class, 0);
    }

    public function diagnosticsStatement(): ?DiagnosticsStatementContext
    {
        return $this->getTypedRuleContext(DiagnosticsStatementContext::class, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterUtilityStatement($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitUtilityStatement($this);
        }
    }
}
