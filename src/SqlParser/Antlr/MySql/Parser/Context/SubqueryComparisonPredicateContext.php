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

    class SubqueryComparisonPredicateContext extends PredicateContext
    {
        /**
         * @var null|Token
         */
        public $quantifier;

        public function __construct(PredicateContext $context)
        {
            parent::__construct($context);

            $this->copyFrom($context);
        }

        public function predicate(): ?PredicateContext
        {
            return $this->getTypedRuleContext(PredicateContext::class, 0);
        }

        public function comparisonOperator(): ?ComparisonOperatorContext
        {
            return $this->getTypedRuleContext(ComparisonOperatorContext::class, 0);
        }

        public function LR_BRACKET(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::LR_BRACKET, 0);
        }

        public function selectStatement(): ?SelectStatementContext
        {
            return $this->getTypedRuleContext(SelectStatementContext::class, 0);
        }

        public function RR_BRACKET(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::RR_BRACKET, 0);
        }

        public function ALL(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::ALL, 0);
        }

        public function ANY(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::ANY, 0);
        }

        public function SOME(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::SOME, 0);
        }

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterSubqueryComparisonPredicate($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitSubqueryComparisonPredicate($this);
            }
        }
    }
