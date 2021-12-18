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

    class ExtractFunctionCallContext extends SpecificFunctionContext
    {
        /**
         * @var null|StringLiteralContext
         */
        public $sourceString;

        /**
         * @var null|ExpressionContext
         */
        public $sourceExpression;

        public function __construct(SpecificFunctionContext $context)
        {
            parent::__construct($context);

            $this->copyFrom($context);
        }

        public function EXTRACT(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::EXTRACT, 0);
        }

        public function LR_BRACKET(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::LR_BRACKET, 0);
        }

        public function intervalType(): ?IntervalTypeContext
        {
            return $this->getTypedRuleContext(IntervalTypeContext::class, 0);
        }

        public function FROM(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::FROM, 0);
        }

        public function RR_BRACKET(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::RR_BRACKET, 0);
        }

        public function stringLiteral(): ?StringLiteralContext
        {
            return $this->getTypedRuleContext(StringLiteralContext::class, 0);
        }

        public function expression(): ?ExpressionContext
        {
            return $this->getTypedRuleContext(ExpressionContext::class, 0);
        }

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterExtractFunctionCall($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitExtractFunctionCall($this);
            }
        }
    }
