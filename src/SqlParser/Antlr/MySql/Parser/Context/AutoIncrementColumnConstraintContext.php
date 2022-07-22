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

class AutoIncrementColumnConstraintContext extends ColumnConstraintContext
{
    public function __construct(ColumnConstraintContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function AUTO_INCREMENT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::AUTO_INCREMENT, 0);
    }

    public function ON(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ON, 0);
    }

    public function UPDATE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::UPDATE, 0);
    }

    public function currentTimestamp(): ?CurrentTimestampContext
    {
        return $this->getTypedRuleContext(CurrentTimestampContext::class, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterAutoIncrementColumnConstraint($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitAutoIncrementColumnConstraint($this);
        }
    }
}
