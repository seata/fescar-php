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
    use Antlr\Antlr4\Runtime\Token;
    use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
    use Antlr\Antlr4\Runtime\Tree\TerminalNode;
    use Hyperf\Seata\SqlParser\Antlr\MySql\Listener\MySqlParserListener;
    use Hyperf\Seata\SqlParser\Antlr\MySql\Parser\MySqlParser;

    class ConstantContext extends ParserRuleContext
    {
        /**
         * @var null|Token
         */
        public $nullLiteral;

        public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
        {
            parent::__construct($parent, $invokingState);
        }

        public function getRuleIndex(): int
        {
            return MySqlParser::RULE_constant;
        }

        public function stringLiteral(): ?StringLiteralContext
        {
            return $this->getTypedRuleContext(StringLiteralContext::class, 0);
        }

        public function decimalLiteral(): ?DecimalLiteralContext
        {
            return $this->getTypedRuleContext(DecimalLiteralContext::class, 0);
        }

        public function MINUS(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::MINUS, 0);
        }

        public function hexadecimalLiteral(): ?HexadecimalLiteralContext
        {
            return $this->getTypedRuleContext(HexadecimalLiteralContext::class, 0);
        }

        public function booleanLiteral(): ?BooleanLiteralContext
        {
            return $this->getTypedRuleContext(BooleanLiteralContext::class, 0);
        }

        public function REAL_LITERAL(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::REAL_LITERAL, 0);
        }

        public function BIT_STRING(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::BIT_STRING, 0);
        }

        public function NULL_LITERAL(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::NULL_LITERAL, 0);
        }

        public function NULL_SPEC_LITERAL(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::NULL_SPEC_LITERAL, 0);
        }

        public function NOT(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::NOT, 0);
        }

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterConstant($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitConstant($this);
            }
        }
    }
