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

    class FrameBetweenContext extends ParserRuleContext
    {
        public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
        {
            parent::__construct($parent, $invokingState);
        }

        public function getRuleIndex(): int
        {
            return MySqlParser::RULE_frameBetween;
        }

        public function BETWEEN(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::BETWEEN, 0);
        }

        /**
         * @return null|array<FrameRangeContext>|FrameRangeContext
         */
        public function frameRange(?int $index = null)
        {
            if ($index === null) {
                return $this->getTypedRuleContexts(FrameRangeContext::class);
            }

            return $this->getTypedRuleContext(FrameRangeContext::class, $index);
        }

        public function AND(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::AND, 0);
        }

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterFrameBetween($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitFrameBetween($this);
            }
        }
    }
