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

    class BetweenPredicateContext extends PredicateContext
    {
        public function __construct(PredicateContext $context)
        {
            parent::__construct($context);

            $this->copyFrom($context);
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

        public function BETWEEN(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::BETWEEN, 0);
        }

        public function AND(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::AND, 0);
        }

        public function NOT(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::NOT, 0);
        }

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterBetweenPredicate($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitBetweenPredicate($this);
            }
        }
    }
