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

class LoadXmlStatementContext extends ParserRuleContext
{
    /**
     * @var null|Token
     */
    public $priority;

    /**
     * @var null|Token
     */
    public $filename;

    /**
     * @var null|Token
     */
    public $violation;

    /**
     * @var null|Token
     */
    public $tag;

    /**
     * @var null|Token
     */
    public $linesFormat;

    /**
     * @var null|CharsetNameContext
     */
    public $charset;

    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_loadXmlStatement;
    }

    public function LOAD(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LOAD, 0);
    }

    public function XML(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::XML, 0);
    }

    public function INFILE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::INFILE, 0);
    }

    public function INTO(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::INTO, 0);
    }

    public function TABLE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::TABLE, 0);
    }

    public function tableName(): ?TableNameContext
    {
        return $this->getTypedRuleContext(TableNameContext::class, 0);
    }

    /**
     * @return null|array<TerminalNode>|TerminalNode
     */
    public function STRING_LITERAL(?int $index = null)
    {
        if ($index === null) {
            return $this->getTokens(MySqlParser::STRING_LITERAL);
        }

        return $this->getToken(MySqlParser::STRING_LITERAL, $index);
    }

    public function LOCAL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LOCAL, 0);
    }

    public function CHARACTER(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::CHARACTER, 0);
    }

    /**
     * @return null|array<TerminalNode>|TerminalNode
     */
    public function SET(?int $index = null)
    {
        if ($index === null) {
            return $this->getTokens(MySqlParser::SET);
        }

        return $this->getToken(MySqlParser::SET, $index);
    }

    /**
     * @return null|array<TerminalNode>|TerminalNode
     */
    public function ROWS(?int $index = null)
    {
        if ($index === null) {
            return $this->getTokens(MySqlParser::ROWS);
        }

        return $this->getToken(MySqlParser::ROWS, $index);
    }

    public function IDENTIFIED(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::IDENTIFIED, 0);
    }

    public function BY(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::BY, 0);
    }

    public function LESS_SYMBOL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LESS_SYMBOL, 0);
    }

    public function GREATER_SYMBOL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::GREATER_SYMBOL, 0);
    }

    /**
     * @return null|array<TerminalNode>|TerminalNode
     */
    public function IGNORE(?int $index = null)
    {
        if ($index === null) {
            return $this->getTokens(MySqlParser::IGNORE);
        }

        return $this->getToken(MySqlParser::IGNORE, $index);
    }

    public function decimalLiteral(): ?DecimalLiteralContext
    {
        return $this->getTypedRuleContext(DecimalLiteralContext::class, 0);
    }

    public function LR_BRACKET(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LR_BRACKET, 0);
    }

    /**
     * @return null|array<AssignmentFieldContext>|AssignmentFieldContext
     */
    public function assignmentField(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(AssignmentFieldContext::class);
        }

        return $this->getTypedRuleContext(AssignmentFieldContext::class, $index);
    }

    public function RR_BRACKET(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::RR_BRACKET, 0);
    }

    /**
     * @return null|array<UpdatedElementContext>|UpdatedElementContext
     */
    public function updatedElement(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(UpdatedElementContext::class);
        }

        return $this->getTypedRuleContext(UpdatedElementContext::class, $index);
    }

    public function charsetName(): ?CharsetNameContext
    {
        return $this->getTypedRuleContext(CharsetNameContext::class, 0);
    }

    public function LOW_PRIORITY(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LOW_PRIORITY, 0);
    }

    public function CONCURRENT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::CONCURRENT, 0);
    }

    public function REPLACE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::REPLACE, 0);
    }

    public function LINES(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LINES, 0);
    }

    /**
     * @return null|array<TerminalNode>|TerminalNode
     */
    public function COMMA(?int $index = null)
    {
        if ($index === null) {
            return $this->getTokens(MySqlParser::COMMA);
        }

        return $this->getToken(MySqlParser::COMMA, $index);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterLoadXmlStatement($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitLoadXmlStatement($this);
        }
    }
}
