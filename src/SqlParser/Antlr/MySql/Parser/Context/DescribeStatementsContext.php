<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
namespace Hyperf\Seata\SqlParser\Antlr\MySql\Parser\Context;

    use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
    use Hyperf\Seata\SqlParser\Antlr\MySql\Listener\MySqlParserListener;

    class DescribeStatementsContext extends DescribeObjectClauseContext
    {
        public function __construct(DescribeObjectClauseContext $context)
        {
            parent::__construct($context);

            $this->copyFrom($context);
        }

        public function selectStatement(): ?SelectStatementContext
        {
            return $this->getTypedRuleContext(SelectStatementContext::class, 0);
        }

        public function deleteStatement(): ?DeleteStatementContext
        {
            return $this->getTypedRuleContext(DeleteStatementContext::class, 0);
        }

        public function insertStatement(): ?InsertStatementContext
        {
            return $this->getTypedRuleContext(InsertStatementContext::class, 0);
        }

        public function replaceStatement(): ?ReplaceStatementContext
        {
            return $this->getTypedRuleContext(ReplaceStatementContext::class, 0);
        }

        public function updateStatement(): ?UpdateStatementContext
        {
            return $this->getTypedRuleContext(UpdateStatementContext::class, 0);
        }

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterDescribeStatements($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitDescribeStatements($this);
            }
        }
    }
