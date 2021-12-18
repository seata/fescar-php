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

    class JsonExpressionAtomContext extends ExpressionAtomContext
    {
        /**
         * @var null|ExpressionAtomContext
         */
        public $left;

        /**
         * @var null|ExpressionAtomContext
         */
        public $right;

        public function __construct(ExpressionAtomContext $context)
        {
            parent::__construct($context);

            $this->copyFrom($context);
        }

        public function jsonOperator(): ?JsonOperatorContext
        {
            return $this->getTypedRuleContext(JsonOperatorContext::class, 0);
        }

        /**
         * @return null|array<ExpressionAtomContext>|ExpressionAtomContext
         */
        public function expressionAtom(?int $index = null)
        {
            if ($index === null) {
                return $this->getTypedRuleContexts(ExpressionAtomContext::class);
            }

            return $this->getTypedRuleContext(ExpressionAtomContext::class, $index);
        }

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterJsonExpressionAtom($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitJsonExpressionAtom($this);
            }
        }
    }
