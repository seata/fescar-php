<?php

declare(strict_types=1);
/**
 * Copyright 1999-2022 Seata.io Group.
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
use Hyperf\Seata\SqlParser\Antlr\MySql\Listener\MySqlParserListener;

class MathExpressionAtomContext extends ExpressionAtomContext
{
    /**
     * @var null|ExpressionAtomContext
     */
    public $left;

    /**
     * @var null|ExpressionAtomContext
     */
    public $right;

    public function __construct(ExpressionAtomContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function mathOperator(): ?MathOperatorContext
    {
        return $this->getTypedRuleContext(MathOperatorContext::class, 0);
    }

    /**
     * @return null|array<ExpressionAtomContext>|ExpressionAtomContext
     */
    public function expressionAtom(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(ExpressionAtomContext::class);
        }

        return $this->getTypedRuleContext(ExpressionAtomContext::class, $index);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterMathExpressionAtom($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitMathExpressionAtom($this);
        }
    }
}
