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

    class StraightJoinContext extends JoinPartContext
    {
        public function __construct(JoinPartContext $context)
        {
            parent::__construct($context);

            $this->copyFrom($context);
        }

        public function STRAIGHT_JOIN(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::STRAIGHT_JOIN, 0);
        }

        public function tableSourceItem(): ?TableSourceItemContext
        {
            return $this->getTypedRuleContext(TableSourceItemContext::class, 0);
        }

        public function ON(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::ON, 0);
        }

        public function expression(): ?ExpressionContext
        {
            return $this->getTypedRuleContext(ExpressionContext::class, 0);
        }

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterStraightJoin($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitStraightJoin($this);
            }
        }
    }
