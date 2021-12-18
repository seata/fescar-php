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

use Antlr\Antlr4\Runtime\ParserRuleContext;
    use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
    use Antlr\Antlr4\Runtime\Tree\TerminalNode;
    use Hyperf\Seata\SqlParser\Antlr\MySql\Listener\MySqlParserListener;
    use Hyperf\Seata\SqlParser\Antlr\MySql\Parser\MySqlParser;

    class FunctionArgsContext extends ParserRuleContext
    {
        public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
        {
            parent::__construct($parent, $invokingState);
        }

        public function getRuleIndex(): int
        {
            return MySqlParser::RULE_functionArgs;
        }

        /**
         * @return null|array<ConstantContext>|ConstantContext
         */
        public function constant(?int $index = null)
        {
            if ($index === null) {
                return $this->getTypedRuleContexts(ConstantContext::class);
            }

            return $this->getTypedRuleContext(ConstantContext::class, $index);
        }

        /**
         * @return null|array<FullColumnNameContext>|FullColumnNameContext
         */
        public function fullColumnName(?int $index = null)
        {
            if ($index === null) {
                return $this->getTypedRuleContexts(FullColumnNameContext::class);
            }

            return $this->getTypedRuleContext(FullColumnNameContext::class, $index);
        }

        /**
         * @return null|array<FunctionCallContext>|FunctionCallContext
         */
        public function functionCall(?int $index = null)
        {
            if ($index === null) {
                return $this->getTypedRuleContexts(FunctionCallContext::class);
            }

            return $this->getTypedRuleContext(FunctionCallContext::class, $index);
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
                $listener->enterFunctionArgs($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitFunctionArgs($this);
            }
        }
    }
