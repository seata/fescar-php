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

    use Antlr\Antlr4\Runtime\Token;
    use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
    use Antlr\Antlr4\Runtime\Tree\TerminalNode;
    use Hyperf\Seata\SqlParser\Antlr\MySql\Listener\MySqlParserListener;
    use Hyperf\Seata\SqlParser\Antlr\MySql\Parser\MySqlParser;

    class TrimFunctionCallContext extends SpecificFunctionContext
    {
        /**
         * @var null|Token
         */
        public $positioinForm;

        /**
         * @var null|StringLiteralContext
         */
        public $sourceString;

        /**
         * @var null|ExpressionContext
         */
        public $sourceExpression;

        /**
         * @var null|StringLiteralContext
         */
        public $fromString;

        /**
         * @var null|ExpressionContext
         */
        public $fromExpression;

        public function __construct(SpecificFunctionContext $context)
        {
            parent::__construct($context);

            $this->copyFrom($context);
        }

        public function TRIM(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::TRIM, 0);
        }

        public function LR_BRACKET(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::LR_BRACKET, 0);
        }

        public function FROM(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::FROM, 0);
        }

        public function RR_BRACKET(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::RR_BRACKET, 0);
        }

        public function BOTH(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::BOTH, 0);
        }

        public function LEADING(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::LEADING, 0);
        }

        public function TRAILING(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::TRAILING, 0);
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
                $listener->enterTrimFunctionCall($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitTrimFunctionCall($this);
            }
        }
    }
