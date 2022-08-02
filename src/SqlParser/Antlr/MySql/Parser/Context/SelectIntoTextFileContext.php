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

class SelectIntoTextFileContext extends SelectIntoExpressionContext
{
    /**
     * @var null|Token
     */
    public $filename;

    /**
     * @var null|Token
     */
    public $fieldsFormat;

    /**
     * @var null|CharsetNameContext
     */
    public $charset;

    public function __construct(SelectIntoExpressionContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function INTO(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::INTO, 0);
    }

    public function OUTFILE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::OUTFILE, 0);
    }

    public function STRING_LITERAL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::STRING_LITERAL, 0);
    }

    public function CHARACTER(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::CHARACTER, 0);
    }

    public function SET(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SET, 0);
    }

    public function LINES(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LINES, 0);
    }

    public function charsetName(): ?CharsetNameContext
    {
        return $this->getTypedRuleContext(CharsetNameContext::class, 0);
    }

    public function FIELDS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::FIELDS, 0);
    }

    public function COLUMNS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::COLUMNS, 0);
    }

    /**
     * @return null|array<SelectFieldsIntoContext>|SelectFieldsIntoContext
     */
    public function selectFieldsInto(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(SelectFieldsIntoContext::class);
        }

        return $this->getTypedRuleContext(SelectFieldsIntoContext::class, $index);
    }

    /**
     * @return null|array<SelectLinesIntoContext>|SelectLinesIntoContext
     */
    public function selectLinesInto(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(SelectLinesIntoContext::class);
        }

        return $this->getTypedRuleContext(SelectLinesIntoContext::class, $index);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterSelectIntoTextFile($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitSelectIntoTextFile($this);
        }
    }
}
