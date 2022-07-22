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

use Antlr\Antlr4\Runtime\ParserRuleContext;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use Hyperf\Seata\SqlParser\Antlr\MySql\Listener\MySqlParserListener;
use Hyperf\Seata\SqlParser\Antlr\MySql\Parser\MySqlParser;

class TransactionStatementContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_transactionStatement;
    }

    public function startTransaction(): ?StartTransactionContext
    {
        return $this->getTypedRuleContext(StartTransactionContext::class, 0);
    }

    public function beginWork(): ?BeginWorkContext
    {
        return $this->getTypedRuleContext(BeginWorkContext::class, 0);
    }

    public function commitWork(): ?CommitWorkContext
    {
        return $this->getTypedRuleContext(CommitWorkContext::class, 0);
    }

    public function rollbackWork(): ?RollbackWorkContext
    {
        return $this->getTypedRuleContext(RollbackWorkContext::class, 0);
    }

    public function savepointStatement(): ?SavepointStatementContext
    {
        return $this->getTypedRuleContext(SavepointStatementContext::class, 0);
    }

    public function rollbackStatement(): ?RollbackStatementContext
    {
        return $this->getTypedRuleContext(RollbackStatementContext::class, 0);
    }

    public function releaseStatement(): ?ReleaseStatementContext
    {
        return $this->getTypedRuleContext(ReleaseStatementContext::class, 0);
    }

    public function lockTables(): ?LockTablesContext
    {
        return $this->getTypedRuleContext(LockTablesContext::class, 0);
    }

    public function unlockTables(): ?UnlockTablesContext
    {
        return $this->getTypedRuleContext(UnlockTablesContext::class, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterTransactionStatement($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitTransactionStatement($this);
        }
    }
}
