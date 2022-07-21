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
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use Antlr\Antlr4\Runtime\Tree\TerminalNode;
use Hyperf\Seata\SqlParser\Antlr\MySql\Listener\MySqlParserListener;
use Hyperf\Seata\SqlParser\Antlr\MySql\Parser\MySqlParser;

class StringMasterOptionContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_stringMasterOption;
    }

    public function MASTER_BIND(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::MASTER_BIND, 0);
    }

    public function MASTER_HOST(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::MASTER_HOST, 0);
    }

    public function MASTER_USER(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::MASTER_USER, 0);
    }

    public function MASTER_PASSWORD(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::MASTER_PASSWORD, 0);
    }

    public function MASTER_LOG_FILE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::MASTER_LOG_FILE, 0);
    }

    public function RELAY_LOG_FILE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::RELAY_LOG_FILE, 0);
    }

    public function MASTER_SSL_CA(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::MASTER_SSL_CA, 0);
    }

    public function MASTER_SSL_CAPATH(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::MASTER_SSL_CAPATH, 0);
    }

    public function MASTER_SSL_CERT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::MASTER_SSL_CERT, 0);
    }

    public function MASTER_SSL_CRL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::MASTER_SSL_CRL, 0);
    }

    public function MASTER_SSL_CRLPATH(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::MASTER_SSL_CRLPATH, 0);
    }

    public function MASTER_SSL_KEY(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::MASTER_SSL_KEY, 0);
    }

    public function MASTER_SSL_CIPHER(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::MASTER_SSL_CIPHER, 0);
    }

    public function MASTER_TLS_VERSION(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::MASTER_TLS_VERSION, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterStringMasterOption($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitStringMasterOption($this);
        }
    }
}
