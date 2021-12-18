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

    class CaseExpressionFunctionCallContext extends SpecificFunctionContext
    {
        /**
         * @var null|FunctionArgContext
         */
        public $elseArg;

        public function __construct(SpecificFunctionContext $context)
        {
            parent::__construct($context);

            $this->copyFrom($context);
        }

        public function CASE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::CASE, 0);
        }

        public function expression(): ?ExpressionContext
        {
            return $this->getTypedRuleContext(ExpressionContext::class, 0);
        }

        public function END(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::END, 0);
        }

        /**
         * @return null|array<CaseFuncAlternativeContext>|CaseFuncAlternativeContext
         */
        public function caseFuncAlternative(?int $index = null)
        {
            if ($index === null) {
                return $this->getTypedRuleContexts(CaseFuncAlternativeContext::class);
            }

            return $this->getTypedRuleContext(CaseFuncAlternativeContext::class, $index);
        }

        public function ELSE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::ELSE, 0);
        }

        public function functionArg(): ?FunctionArgContext
        {
            return $this->getTypedRuleContext(FunctionArgContext::class, 0);
        }

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterCaseExpressionFunctionCall($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitCaseExpressionFunctionCall($this);
            }
        }
    }
