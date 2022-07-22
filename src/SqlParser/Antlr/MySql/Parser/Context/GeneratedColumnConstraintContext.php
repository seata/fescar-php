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

use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use Antlr\Antlr4\Runtime\Tree\TerminalNode;
use Hyperf\Seata\SqlParser\Antlr\MySql\Listener\MySqlParserListener;
use Hyperf\Seata\SqlParser\Antlr\MySql\Parser\MySqlParser;

class GeneratedColumnConstraintContext extends ColumnConstraintContext
{
    public function __construct(ColumnConstraintContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function AS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::AS, 0);
    }

    public function LR_BRACKET(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LR_BRACKET, 0);
    }

    public function expression(): ?ExpressionContext
    {
        return $this->getTypedRuleContext(ExpressionContext::class, 0);
    }

    public function RR_BRACKET(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::RR_BRACKET, 0);
    }

    public function GENERATED(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::GENERATED, 0);
    }

    public function ALWAYS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ALWAYS, 0);
    }

    public function VIRTUAL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::VIRTUAL, 0);
    }

    public function STORED(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::STORED, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterGeneratedColumnConstraint($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitGeneratedColumnConstraint($this);
        }
    }
}
