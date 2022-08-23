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

class ShowLogEventsContext extends ShowStatementContext
{
    /**
     * @var null|Token
     */
    public $logFormat;

    /**
     * @var null|Token
     */
    public $filename;

    /**
     * @var null|DecimalLiteralContext
     */
    public $fromPosition;

    /**
     * @var null|DecimalLiteralContext
     */
    public $offset;

    /**
     * @var null|DecimalLiteralContext
     */
    public $rowCount;

    public function __construct(ShowStatementContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function SHOW(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SHOW, 0);
    }

    public function EVENTS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::EVENTS, 0);
    }

    public function BINLOG(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::BINLOG, 0);
    }

    public function RELAYLOG(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::RELAYLOG, 0);
    }

    public function IN(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::IN, 0);
    }

    public function FROM(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::FROM, 0);
    }

    public function LIMIT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LIMIT, 0);
    }

    public function STRING_LITERAL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::STRING_LITERAL, 0);
    }

    /**
     * @return null|array<DecimalLiteralContext>|DecimalLiteralContext
     */
    public function decimalLiteral(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(DecimalLiteralContext::class);
        }

        return $this->getTypedRuleContext(DecimalLiteralContext::class, $index);
    }

    public function COMMA(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::COMMA, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterShowLogEvents($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitShowLogEvents($this);
        }
    }
}
