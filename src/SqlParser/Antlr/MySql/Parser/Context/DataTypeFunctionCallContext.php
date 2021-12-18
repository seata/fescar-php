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

    class DataTypeFunctionCallContext extends SpecificFunctionContext
    {
        /**
         * @var null|Token
         */
        public $separator;

        public function __construct(SpecificFunctionContext $context)
        {
            parent::__construct($context);

            $this->copyFrom($context);
        }

        public function CONVERT(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::CONVERT, 0);
        }

        public function LR_BRACKET(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::LR_BRACKET, 0);
        }

        public function expression(): ?ExpressionContext
        {
            return $this->getTypedRuleContext(ExpressionContext::class, 0);
        }

        public function convertedDataType(): ?ConvertedDataTypeContext
        {
            return $this->getTypedRuleContext(ConvertedDataTypeContext::class, 0);
        }

        public function RR_BRACKET(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::RR_BRACKET, 0);
        }

        public function COMMA(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::COMMA, 0);
        }

        public function USING(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::USING, 0);
        }

        public function charsetName(): ?CharsetNameContext
        {
            return $this->getTypedRuleContext(CharsetNameContext::class, 0);
        }

        public function CAST(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::CAST, 0);
        }

        public function AS(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::AS, 0);
        }

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterDataTypeFunctionCall($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitDataTypeFunctionCall($this);
            }
        }
    }
