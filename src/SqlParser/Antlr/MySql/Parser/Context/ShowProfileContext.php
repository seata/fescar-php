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

use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use Antlr\Antlr4\Runtime\Tree\TerminalNode;
use Hyperf\Seata\SqlParser\Antlr\MySql\Listener\MySqlParserListener;
use Hyperf\Seata\SqlParser\Antlr\MySql\Parser\MySqlParser;

class ShowProfileContext extends ShowStatementContext
{
    /**
     * @var null|DecimalLiteralContext
     */
    public $queryCount;

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

    public function PROFILE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::PROFILE, 0);
    }

    /**
     * @return null|array<ShowProfileTypeContext>|ShowProfileTypeContext
     */
    public function showProfileType(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(ShowProfileTypeContext::class);
        }

        return $this->getTypedRuleContext(ShowProfileTypeContext::class, $index);
    }

    public function LIMIT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LIMIT, 0);
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

    public function FOR(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::FOR, 0);
    }

    public function QUERY(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::QUERY, 0);
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

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterShowProfile($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitShowProfile($this);
        }
    }
}
