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

    class GetFormatFunctionCallContext extends SpecificFunctionContext
    {
        /**
         * @var null|Token
         */
        public $datetimeFormat;

        public function __construct(SpecificFunctionContext $context)
        {
            parent::__construct($context);

            $this->copyFrom($context);
        }

        public function GET_FORMAT(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::GET_FORMAT, 0);
        }

        public function LR_BRACKET(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::LR_BRACKET, 0);
        }

        public function COMMA(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::COMMA, 0);
        }

        public function stringLiteral(): ?StringLiteralContext
        {
            return $this->getTypedRuleContext(StringLiteralContext::class, 0);
        }

        public function RR_BRACKET(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::RR_BRACKET, 0);
        }

        public function DATE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::DATE, 0);
        }

        public function TIME(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::TIME, 0);
        }

        public function DATETIME(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::DATETIME, 0);
        }

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterGetFormatFunctionCall($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitGetFormatFunctionCall($this);
            }
        }
    }
