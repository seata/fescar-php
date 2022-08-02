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
