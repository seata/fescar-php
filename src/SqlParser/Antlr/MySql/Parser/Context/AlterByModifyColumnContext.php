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

class AlterByModifyColumnContext extends AlterSpecificationContext
{
    public function __construct(AlterSpecificationContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function MODIFY(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::MODIFY, 0);
    }

    /**
     * @return null|array<UidContext>|UidContext
     */
    public function uid(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(UidContext::class);
        }

        return $this->getTypedRuleContext(UidContext::class, $index);
    }

    public function columnDefinition(): ?ColumnDefinitionContext
    {
        return $this->getTypedRuleContext(ColumnDefinitionContext::class, 0);
    }

    public function COLUMN(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::COLUMN, 0);
    }

    public function FIRST(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::FIRST, 0);
    }

    public function AFTER(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::AFTER, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterAlterByModifyColumn($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitAlterByModifyColumn($this);
        }
    }
}
