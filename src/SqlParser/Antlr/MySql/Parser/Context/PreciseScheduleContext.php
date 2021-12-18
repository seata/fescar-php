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

    class PreciseScheduleContext extends ScheduleExpressionContext
    {
        public function __construct(ScheduleExpressionContext $context)
        {
            parent::__construct($context);

            $this->copyFrom($context);
        }

        public function AT(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::AT, 0);
        }

        public function timestampValue(): ?TimestampValueContext
        {
            return $this->getTypedRuleContext(TimestampValueContext::class, 0);
        }

        /**
         * @return null|array<IntervalExprContext>|IntervalExprContext
         */
        public function intervalExpr(?int $index = null)
        {
            if ($index === null) {
                return $this->getTypedRuleContexts(IntervalExprContext::class);
            }

            return $this->getTypedRuleContext(IntervalExprContext::class, $index);
        }

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterPreciseSchedule($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitPreciseSchedule($this);
            }
        }
    }
