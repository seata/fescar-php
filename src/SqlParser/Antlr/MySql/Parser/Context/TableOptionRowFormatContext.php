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

class TableOptionRowFormatContext extends TableOptionContext
{
    /**
     * @var null|Token
     */
    public $rowFormat;

    public function __construct(TableOptionContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function ROW_FORMAT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ROW_FORMAT, 0);
    }

    public function DEFAULT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::DEFAULT, 0);
    }

    public function DYNAMIC(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::DYNAMIC, 0);
    }

    public function FIXED(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::FIXED, 0);
    }

    public function COMPRESSED(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::COMPRESSED, 0);
    }

    public function REDUNDANT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::REDUNDANT, 0);
    }

    public function COMPACT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::COMPACT, 0);
    }

    public function ID(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ID, 0);
    }

    public function EQUAL_SYMBOL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::EQUAL_SYMBOL, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterTableOptionRowFormat($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitTableOptionRowFormat($this);
        }
    }
}
