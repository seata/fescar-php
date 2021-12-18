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

    class CollateExpressionAtomContext extends ExpressionAtomContext
    {
        public function __construct(ExpressionAtomContext $context)
        {
            parent::__construct($context);

            $this->copyFrom($context);
        }

        public function expressionAtom(): ?ExpressionAtomContext
        {
            return $this->getTypedRuleContext(ExpressionAtomContext::class, 0);
        }

        public function COLLATE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::COLLATE, 0);
        }

        public function collationName(): ?CollationNameContext
        {
            return $this->getTypedRuleContext(CollationNameContext::class, 0);
        }

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterCollateExpressionAtom($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitCollateExpressionAtom($this);
            }
        }
    }
