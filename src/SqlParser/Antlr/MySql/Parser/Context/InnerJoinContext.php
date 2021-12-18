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

    class InnerJoinContext extends JoinPartContext
    {
        public function __construct(JoinPartContext $context)
        {
            parent::__construct($context);

            $this->copyFrom($context);
        }

        public function JOIN(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::JOIN, 0);
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

        public function USING(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::USING, 0);
        }

        public function LR_BRACKET(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::LR_BRACKET, 0);
        }

        public function uidList(): ?UidListContext
        {
            return $this->getTypedRuleContext(UidListContext::class, 0);
        }

        public function RR_BRACKET(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::RR_BRACKET, 0);
        }

        public function INNER(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::INNER, 0);
        }

        public function CROSS(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::CROSS, 0);
        }

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterInnerJoin($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitInnerJoin($this);
            }
        }
    }
