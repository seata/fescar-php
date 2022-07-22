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

class AlterUpgradeNameContext extends AlterDatabaseContext
{
    /**
     * @var null|Token
     */
    public $dbFormat;

    public function __construct(AlterDatabaseContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function ALTER(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ALTER, 0);
    }

    public function uid(): ?UidContext
    {
        return $this->getTypedRuleContext(UidContext::class, 0);
    }

    public function UPGRADE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::UPGRADE, 0);
    }

    public function DATA(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::DATA, 0);
    }

    public function DIRECTORY(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::DIRECTORY, 0);
    }

    public function NAME(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::NAME, 0);
    }

    public function DATABASE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::DATABASE, 0);
    }

    public function SCHEMA(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SCHEMA, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterAlterUpgradeName($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitAlterUpgradeName($this);
        }
    }
}
