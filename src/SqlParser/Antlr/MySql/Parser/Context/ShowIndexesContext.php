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

use Antlr\Antlr4\Runtime\Token;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use Antlr\Antlr4\Runtime\Tree\TerminalNode;
use Hyperf\Seata\SqlParser\Antlr\MySql\Listener\MySqlParserListener;
use Hyperf\Seata\SqlParser\Antlr\MySql\Parser\MySqlParser;

class ShowIndexesContext extends ShowStatementContext
{
    /**
     * @var null|Token
     */
    public $indexFormat;

    /**
     * @var null|Token
     */
    public $tableFormat;

    /**
     * @var null|Token
     */
    public $schemaFormat;

    public function __construct(ShowStatementContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function SHOW(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SHOW, 0);
    }

    public function tableName(): ?TableNameContext
    {
        return $this->getTypedRuleContext(TableNameContext::class, 0);
    }

    public function INDEX(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::INDEX, 0);
    }

    public function INDEXES(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::INDEXES, 0);
    }

    public function KEYS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::KEYS, 0);
    }

    /**
     * @return null|array<TerminalNode>|TerminalNode
     */
    public function FROM(?int $index = null)
    {
        if ($index === null) {
            return $this->getTokens(MySqlParser::FROM);
        }

        return $this->getToken(MySqlParser::FROM, $index);
    }

    /**
     * @return null|array<TerminalNode>|TerminalNode
     */
    public function IN(?int $index = null)
    {
        if ($index === null) {
            return $this->getTokens(MySqlParser::IN);
        }

        return $this->getToken(MySqlParser::IN, $index);
    }

    public function uid(): ?UidContext
    {
        return $this->getTypedRuleContext(UidContext::class, 0);
    }

    public function WHERE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::WHERE, 0);
    }

    public function expression(): ?ExpressionContext
    {
        return $this->getTypedRuleContext(ExpressionContext::class, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterShowIndexes($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitShowIndexes($this);
        }
    }
}
