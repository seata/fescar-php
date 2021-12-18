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
    use Antlr\Antlr4\Runtime\Tree\TerminalNode;
    use Hyperf\Seata\SqlParser\Antlr\MySql\Listener\MySqlParserListener;
    use Hyperf\Seata\SqlParser\Antlr\MySql\Parser\MySqlParser;

    class ExpressionAtomPredicateContext extends PredicateContext
    {
        public function __construct(PredicateContext $context)
        {
            parent::__construct($context);

            $this->copyFrom($context);
        }

        public function expressionAtom(): ?ExpressionAtomContext
        {
            return $this->getTypedRuleContext(ExpressionAtomContext::class, 0);
        }

        public function LOCAL_ID(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::LOCAL_ID, 0);
        }

        public function VAR_ASSIGN(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::VAR_ASSIGN, 0);
        }

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterExpressionAtomPredicate($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitExpressionAtomPredicate($this);
            }
        }
    }
