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

    class MathOperatorContext extends ParserRuleContext
    {
        public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
        {
            parent::__construct($parent, $invokingState);
        }

        public function getRuleIndex(): int
        {
            return MySqlParser::RULE_mathOperator;
        }

        public function STAR(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::STAR, 0);
        }

        public function DIVIDE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::DIVIDE, 0);
        }

        public function MODULE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::MODULE, 0);
        }

        public function DIV(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::DIV, 0);
        }

        public function MOD(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::MOD, 0);
        }

        public function PLUS(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::PLUS, 0);
        }

        public function MINUS(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::MINUS, 0);
        }

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterMathOperator($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitMathOperator($this);
            }
        }
    }
