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
use Antlr\Antlr4\Runtime\Token;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use Antlr\Antlr4\Runtime\Tree\TerminalNode;
use Hyperf\Seata\SqlParser\Antlr\MySql\Listener\MySqlParserListener;
use Hyperf\Seata\SqlParser\Antlr\MySql\Parser\MySqlParser;

class ConstantContext extends ParserRuleContext
{
    /**
     * @var null|Token
     */
    public $nullLiteral;

    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_constant;
    }

    public function stringLiteral(): ?StringLiteralContext
    {
        return $this->getTypedRuleContext(StringLiteralContext::class, 0);
    }

    public function decimalLiteral(): ?DecimalLiteralContext
    {
        return $this->getTypedRuleContext(DecimalLiteralContext::class, 0);
    }

    public function MINUS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::MINUS, 0);
    }

    public function hexadecimalLiteral(): ?HexadecimalLiteralContext
    {
        return $this->getTypedRuleContext(HexadecimalLiteralContext::class, 0);
    }

    public function booleanLiteral(): ?BooleanLiteralContext
    {
        return $this->getTypedRuleContext(BooleanLiteralContext::class, 0);
    }

    public function REAL_LITERAL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::REAL_LITERAL, 0);
    }

    public function BIT_STRING(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::BIT_STRING, 0);
    }

    public function NULL_LITERAL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::NULL_LITERAL, 0);
    }

    public function NULL_SPEC_LITERAL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::NULL_SPEC_LITERAL, 0);
    }

    public function NOT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::NOT, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterConstant($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitConstant($this);
        }
    }
}
