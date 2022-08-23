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

class AlterByExchangePartitionContext extends AlterSpecificationContext
{
    /**
     * @var null|Token
     */
    public $validationFormat;

    public function __construct(AlterSpecificationContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function EXCHANGE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::EXCHANGE, 0);
    }

    public function PARTITION(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::PARTITION, 0);
    }

    public function uid(): ?UidContext
    {
        return $this->getTypedRuleContext(UidContext::class, 0);
    }

    /**
     * @return null|array<TerminalNode>|TerminalNode
     */
    public function WITH(?int $index = null)
    {
        if ($index === null) {
            return $this->getTokens(MySqlParser::WITH);
        }

        return $this->getToken(MySqlParser::WITH, $index);
    }

    public function TABLE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::TABLE, 0);
    }

    public function tableName(): ?TableNameContext
    {
        return $this->getTypedRuleContext(TableNameContext::class, 0);
    }

    public function VALIDATION(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::VALIDATION, 0);
    }

    public function WITHOUT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::WITHOUT, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterAlterByExchangePartition($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitAlterByExchangePartition($this);
        }
    }
}
