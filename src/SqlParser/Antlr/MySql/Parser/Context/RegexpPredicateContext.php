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

class RegexpPredicateContext extends PredicateContext
{
    /**
     * @var null|Token
     */
    public $regex;

    public function __construct(PredicateContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    /**
     * @return null|array<PredicateContext>|PredicateContext
     */
    public function predicate(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(PredicateContext::class);
        }

        return $this->getTypedRuleContext(PredicateContext::class, $index);
    }

    public function REGEXP(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::REGEXP, 0);
    }

    public function RLIKE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::RLIKE, 0);
    }

    public function NOT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::NOT, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterRegexpPredicate($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitRegexpPredicate($this);
        }
    }
}
