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

    class InPredicateContext extends PredicateContext
    {
        public function __construct(PredicateContext $context)
        {
            parent::__construct($context);

            $this->copyFrom($context);
        }

        public function predicate(): ?PredicateContext
        {
            return $this->getTypedRuleContext(PredicateContext::class, 0);
        }

        public function IN(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::IN, 0);
        }

        public function LR_BRACKET(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::LR_BRACKET, 0);
        }

        public function RR_BRACKET(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::RR_BRACKET, 0);
        }

        public function selectStatement(): ?SelectStatementContext
        {
            return $this->getTypedRuleContext(SelectStatementContext::class, 0);
        }

        public function expressions(): ?ExpressionsContext
        {
            return $this->getTypedRuleContext(ExpressionsContext::class, 0);
        }

        public function NOT(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::NOT, 0);
        }

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterInPredicate($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitInPredicate($this);
            }
        }
    }
