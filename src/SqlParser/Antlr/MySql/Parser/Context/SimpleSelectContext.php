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

    class SimpleSelectContext extends SelectStatementContext
    {
        public function __construct(SelectStatementContext $context)
        {
            parent::__construct($context);

            $this->copyFrom($context);
        }

        public function querySpecification(): ?QuerySpecificationContext
        {
            return $this->getTypedRuleContext(QuerySpecificationContext::class, 0);
        }

        public function lockClause(): ?LockClauseContext
        {
            return $this->getTypedRuleContext(LockClauseContext::class, 0);
        }

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterSimpleSelect($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitSimpleSelect($this);
            }
        }
    }
