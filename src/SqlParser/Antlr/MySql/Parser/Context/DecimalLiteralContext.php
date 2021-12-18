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

    class DecimalLiteralContext extends ParserRuleContext
    {
        public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
        {
            parent::__construct($parent, $invokingState);
        }

        public function getRuleIndex(): int
        {
            return MySqlParser::RULE_decimalLiteral;
        }

        public function DECIMAL_LITERAL(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::DECIMAL_LITERAL, 0);
        }

        public function ZERO_DECIMAL(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::ZERO_DECIMAL, 0);
        }

        public function ONE_DECIMAL(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::ONE_DECIMAL, 0);
        }

        public function TWO_DECIMAL(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::TWO_DECIMAL, 0);
        }

        public function REAL_LITERAL(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::REAL_LITERAL, 0);
        }

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterDecimalLiteral($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitDecimalLiteral($this);
            }
        }
    }
