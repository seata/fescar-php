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

use Antlr\Antlr4\Runtime\Token;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use Antlr\Antlr4\Runtime\Tree\TerminalNode;
use Hyperf\Seata\SqlParser\Antlr\MySql\Listener\MySqlParserListener;
use Hyperf\Seata\SqlParser\Antlr\MySql\Parser\MySqlParser;

class SimpleDataTypeContext extends DataTypeContext
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

    public function DATE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::DATE, 0);
    }

    public function TINYBLOB(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::TINYBLOB, 0);
    }

    public function MEDIUMBLOB(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::MEDIUMBLOB, 0);
    }

    public function LONGBLOB(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LONGBLOB, 0);
    }

    public function BOOL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::BOOL, 0);
    }

    public function BOOLEAN(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::BOOLEAN, 0);
    }

    public function SERIAL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SERIAL, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterSimpleDataType($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitSimpleDataType($this);
        }
    }
}
