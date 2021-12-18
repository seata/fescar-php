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

    class BinaryComparisonPredicateContext extends PredicateContext
    {
        /**
         * @var null|PredicateContext
         */
        public $left;

        /**
         * @var null|PredicateContext
         */
        public $right;

        public function __construct(PredicateContext $context)
        {
            parent::__construct($context);

            $this->copyFrom($context);
        }

        public function comparisonOperator(): ?ComparisonOperatorContext
        {
            return $this->getTypedRuleContext(ComparisonOperatorContext::class, 0);
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

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterBinaryComparisonPredicate($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitBinaryComparisonPredicate($this);
            }
        }
    }
