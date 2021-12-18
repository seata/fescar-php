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

    class UnaryExpressionAtomContext extends ExpressionAtomContext
    {
        public function __construct(ExpressionAtomContext $context)
        {
            parent::__construct($context);

            $this->copyFrom($context);
        }

        public function unaryOperator(): ?UnaryOperatorContext
        {
            return $this->getTypedRuleContext(UnaryOperatorContext::class, 0);
        }

        public function expressionAtom(): ?ExpressionAtomContext
        {
            return $this->getTypedRuleContext(ExpressionAtomContext::class, 0);
        }

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterUnaryExpressionAtom($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitUnaryExpressionAtom($this);
            }
        }
    }
