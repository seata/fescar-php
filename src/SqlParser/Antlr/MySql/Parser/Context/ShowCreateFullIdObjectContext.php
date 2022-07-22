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

class ShowCreateFullIdObjectContext extends ShowStatementContext
{
    /**
     * @var null|Token
     */
    public $namedEntity;

    public function __construct(ShowStatementContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function SHOW(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SHOW, 0);
    }

    public function CREATE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::CREATE, 0);
    }

    public function fullId(): ?FullIdContext
    {
        return $this->getTypedRuleContext(FullIdContext::class, 0);
    }

    public function EVENT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::EVENT, 0);
    }

    public function FUNCTION(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::FUNCTION, 0);
    }

    public function PROCEDURE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::PROCEDURE, 0);
    }

    public function TABLE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::TABLE, 0);
    }

    public function TRIGGER(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::TRIGGER, 0);
    }

    public function VIEW(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::VIEW, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterShowCreateFullIdObject($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitShowCreateFullIdObject($this);
        }
    }
}
