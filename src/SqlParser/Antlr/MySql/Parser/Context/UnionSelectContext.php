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

    use Antlr\Antlr4\Runtime\Token;
    use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
    use Antlr\Antlr4\Runtime\Tree\TerminalNode;
    use Hyperf\Seata\SqlParser\Antlr\MySql\Listener\MySqlParserListener;
    use Hyperf\Seata\SqlParser\Antlr\MySql\Parser\MySqlParser;

    class UnionSelectContext extends SelectStatementContext
    {
        /**
         * @var null|Token
         */
        public $unionType;

        public function __construct(SelectStatementContext $context)
        {
            parent::__construct($context);

            $this->copyFrom($context);
        }

        public function querySpecificationNointo(): ?QuerySpecificationNointoContext
        {
            return $this->getTypedRuleContext(QuerySpecificationNointoContext::class, 0);
        }

        /**
         * @return null|array<UnionStatementContext>|UnionStatementContext
         */
        public function unionStatement(?int $index = null)
        {
            if ($index === null) {
                return $this->getTypedRuleContexts(UnionStatementContext::class);
            }

            return $this->getTypedRuleContext(UnionStatementContext::class, $index);
        }

        public function UNION(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::UNION, 0);
        }

        public function orderByClause(): ?OrderByClauseContext
        {
            return $this->getTypedRuleContext(OrderByClauseContext::class, 0);
        }

        public function limitClause(): ?LimitClauseContext
        {
            return $this->getTypedRuleContext(LimitClauseContext::class, 0);
        }

        public function lockClause(): ?LockClauseContext
        {
            return $this->getTypedRuleContext(LockClauseContext::class, 0);
        }

        public function querySpecification(): ?QuerySpecificationContext
        {
            return $this->getTypedRuleContext(QuerySpecificationContext::class, 0);
        }

        public function queryExpression(): ?QueryExpressionContext
        {
            return $this->getTypedRuleContext(QueryExpressionContext::class, 0);
        }

        public function ALL(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::ALL, 0);
        }

        public function DISTINCT(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::DISTINCT, 0);
        }

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterUnionSelect($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitUnionSelect($this);
            }
        }
    }
