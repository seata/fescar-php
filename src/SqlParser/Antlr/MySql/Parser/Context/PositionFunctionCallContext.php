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

    class PositionFunctionCallContext extends SpecificFunctionContext
    {
        /**
         * @var null|StringLiteralContext
         */
        public $positionString;

        /**
         * @var null|ExpressionContext
         */
        public $positionExpression;

        /**
         * @var null|StringLiteralContext
         */
        public $inString;

        /**
         * @var null|ExpressionContext
         */
        public $inExpression;

        public function __construct(SpecificFunctionContext $context)
        {
            parent::__construct($context);

            $this->copyFrom($context);
        }

        public function POSITION(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::POSITION, 0);
        }

        public function LR_BRACKET(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::LR_BRACKET, 0);
        }

        public function IN(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::IN, 0);
        }

        public function RR_BRACKET(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::RR_BRACKET, 0);
        }

        /**
         * @return null|array<StringLiteralContext>|StringLiteralContext
         */
        public function stringLiteral(?int $index = null)
        {
            if ($index === null) {
                return $this->getTypedRuleContexts(StringLiteralContext::class);
            }

            return $this->getTypedRuleContext(StringLiteralContext::class, $index);
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

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterPositionFunctionCall($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitPositionFunctionCall($this);
            }
        }
    }
