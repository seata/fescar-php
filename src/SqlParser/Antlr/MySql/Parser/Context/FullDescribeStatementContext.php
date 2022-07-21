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
use Antlr\Antlr4\Runtime\Token;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use Antlr\Antlr4\Runtime\Tree\TerminalNode;
use Hyperf\Seata\SqlParser\Antlr\MySql\Listener\MySqlParserListener;
use Hyperf\Seata\SqlParser\Antlr\MySql\Parser\MySqlParser;

class FullDescribeStatementContext extends ParserRuleContext
{
    /**
     * @var null|Token
     */
    public $command;

    /**
     * @var null|Token
     */
    public $formatType;

    /**
     * @var null|Token
     */
    public $formatValue;

    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_fullDescribeStatement;
    }

    public function describeObjectClause(): ?DescribeObjectClauseContext
    {
        return $this->getTypedRuleContext(DescribeObjectClauseContext::class, 0);
    }

    public function EXPLAIN(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::EXPLAIN, 0);
    }

    public function DESCRIBE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::DESCRIBE, 0);
    }

    public function DESC(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::DESC, 0);
    }

    public function EQUAL_SYMBOL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::EQUAL_SYMBOL, 0);
    }

    public function EXTENDED(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::EXTENDED, 0);
    }

    public function PARTITIONS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::PARTITIONS, 0);
    }

    public function FORMAT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::FORMAT, 0);
    }

    public function TRADITIONAL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::TRADITIONAL, 0);
    }

    public function JSON(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::JSON, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterFullDescribeStatement($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitFullDescribeStatement($this);
        }
    }
}
