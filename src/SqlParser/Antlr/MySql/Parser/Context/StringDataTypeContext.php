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

class StringDataTypeContext extends DataTypeContext
{
    /**
     * @var null|Token
     */
    public $typeName;

    public function __construct(DataTypeContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function CHAR(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::CHAR, 0);
    }

    /**
     * @return null|array<TerminalNode>|TerminalNode
     */
    public function CHARACTER(?int $index = null)
    {
        if ($index === null) {
            return $this->getTokens(MySqlParser::CHARACTER);
        }

        return $this->getToken(MySqlParser::CHARACTER, $index);
    }

    public function VARCHAR(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::VARCHAR, 0);
    }

    public function TINYTEXT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::TINYTEXT, 0);
    }

    public function TEXT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::TEXT, 0);
    }

    public function MEDIUMTEXT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::MEDIUMTEXT, 0);
    }

    public function LONGTEXT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LONGTEXT, 0);
    }

    public function NCHAR(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::NCHAR, 0);
    }

    public function NVARCHAR(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::NVARCHAR, 0);
    }

    public function LONG(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LONG, 0);
    }

    public function VARYING(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::VARYING, 0);
    }

    public function lengthOneDimension(): ?LengthOneDimensionContext
    {
        return $this->getTypedRuleContext(LengthOneDimensionContext::class, 0);
    }

    /**
     * @return null|array<TerminalNode>|TerminalNode
     */
    public function BINARY(?int $index = null)
    {
        if ($index === null) {
            return $this->getTokens(MySqlParser::BINARY);
        }

        return $this->getToken(MySqlParser::BINARY, $index);
    }

    public function charsetName(): ?CharsetNameContext
    {
        return $this->getTypedRuleContext(CharsetNameContext::class, 0);
    }

    public function COLLATE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::COLLATE, 0);
    }

    public function collationName(): ?CollationNameContext
    {
        return $this->getTypedRuleContext(CollationNameContext::class, 0);
    }

    public function SET(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SET, 0);
    }

    public function CHARSET(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::CHARSET, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterStringDataType($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitStringDataType($this);
        }
    }
}
