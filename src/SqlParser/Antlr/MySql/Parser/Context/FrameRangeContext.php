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

    class FrameRangeContext extends ParserRuleContext
    {
        public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
        {
            parent::__construct($parent, $invokingState);
        }

        public function getRuleIndex(): int
        {
            return MySqlParser::RULE_frameRange;
        }

        public function CURRENT(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::CURRENT, 0);
        }

        public function ROW(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::ROW, 0);
        }

        public function UNBOUNDED(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::UNBOUNDED, 0);
        }

        public function PRECEDING(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::PRECEDING, 0);
        }

        public function FOLLOWING(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::FOLLOWING, 0);
        }

        public function expression(): ?ExpressionContext
        {
            return $this->getTypedRuleContext(ExpressionContext::class, 0);
        }

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterFrameRange($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitFrameRange($this);
            }
        }
    }
