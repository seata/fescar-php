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

class AlterByAddCheckTableConstraintContext extends AlterSpecificationContext
{
    /**
     * @var null|UidContext
     */
    public $name;

    public function __construct(AlterSpecificationContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function ADD(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ADD, 0);
    }

    public function CHECK(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::CHECK, 0);
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

    public function CONSTRAINT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::CONSTRAINT, 0);
    }

    public function uid(): ?UidContext
    {
        return $this->getTypedRuleContext(UidContext::class, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterAlterByAddCheckTableConstraint($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitAlterByAddCheckTableConstraint($this);
        }
    }
}
