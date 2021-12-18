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

    class NestedRowExpressionAtomContext extends ExpressionAtomContext
    {
        public function __construct(ExpressionAtomContext $context)
        {
            parent::__construct($context);

            $this->copyFrom($context);
        }

        public function ROW(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::ROW, 0);
        }

        public function LR_BRACKET(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::LR_BRACKET, 0);
        }

        /**
         * @return null|array<ExpressionContext>|ExpressionContext
         */
        public function expression(?int $index = null)
        {
            if ($index === null) {
                return $this->getTypedRuleContexts(ExpressionContext::class);
            }

            return $this->getTypedRuleContext(ExpressionContext::class, $index);
        }

        public function RR_BRACKET(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::RR_BRACKET, 0);
        }

        /**
         * @return null|array<TerminalNode>|TerminalNode
         */
        public function COMMA(?int $index = null)
        {
            if ($index === null) {
                return $this->getTokens(MySqlParser::COMMA);
            }

            return $this->getToken(MySqlParser::COMMA, $index);
        }

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterNestedRowExpressionAtom($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitNestedRowExpressionAtom($this);
            }
        }
    }
