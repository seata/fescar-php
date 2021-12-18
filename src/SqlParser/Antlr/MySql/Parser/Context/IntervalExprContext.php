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

    class IntervalExprContext extends ParserRuleContext
    {
        public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
        {
            parent::__construct($parent, $invokingState);
        }

        public function getRuleIndex(): int
        {
            return MySqlParser::RULE_intervalExpr;
        }

        public function PLUS(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::PLUS, 0);
        }

        public function INTERVAL(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::INTERVAL, 0);
        }

        public function intervalType(): ?IntervalTypeContext
        {
            return $this->getTypedRuleContext(IntervalTypeContext::class, 0);
        }

        public function decimalLiteral(): ?DecimalLiteralContext
        {
            return $this->getTypedRuleContext(DecimalLiteralContext::class, 0);
        }

        public function expression(): ?ExpressionContext
        {
            return $this->getTypedRuleContext(ExpressionContext::class, 0);
        }

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterIntervalExpr($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitIntervalExpr($this);
            }
        }
    }
