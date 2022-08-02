<?php

declare(strict_types=1);
/**
 * Copyright 2019-2022 Seata.io Group.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 */
namespace Hyperf\Seata\SqlParser\Antlr\MySql\Parser\Context;

use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use Antlr\Antlr4\Runtime\Tree\TerminalNode;
use Hyperf\Seata\SqlParser\Antlr\MySql\Listener\MySqlParserListener;
use Hyperf\Seata\SqlParser\Antlr\MySql\Parser\MySqlParser;

class IntervalScheduleContext extends ScheduleExpressionContext
{
    /**
     * @var null|TimestampValueContext
     */
    public $startTimestamp;

    /**
     * @var null|IntervalExprContext
     */
    public $intervalExpr;

    /**
     * @var null|TimestampValueContext
     */
    public $endTimestamp;

    /**
     * @var null|array<IntervalExprContext>
     */
    public $startIntervals;

    /**
     * @var null|array<IntervalExprContext>
     */
    public $endIntervals;

    public function __construct(ScheduleExpressionContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function EVERY(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::EVERY, 0);
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

    public function STARTS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::STARTS, 0);
    }

    public function ENDS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ENDS, 0);
    }

    /**
     * @return null|array<TimestampValueContext>|TimestampValueContext
     */
    public function timestampValue(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(TimestampValueContext::class);
        }

        return $this->getTypedRuleContext(TimestampValueContext::class, $index);
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
            $listener->enterIntervalSchedule($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitIntervalSchedule($this);
        }
    }
}
