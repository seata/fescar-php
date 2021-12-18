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

    class TableSourceNestedContext extends TableSourceContext
    {
        public function __construct(TableSourceContext $context)
        {
            parent::__construct($context);

            $this->copyFrom($context);
        }

        public function LR_BRACKET(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::LR_BRACKET, 0);
        }

        public function tableSourceItem(): ?TableSourceItemContext
        {
            return $this->getTypedRuleContext(TableSourceItemContext::class, 0);
        }

        public function RR_BRACKET(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::RR_BRACKET, 0);
        }

        /**
         * @return null|array<JoinPartContext>|JoinPartContext
         */
        public function joinPart(?int $index = null)
        {
            if ($index === null) {
                return $this->getTypedRuleContexts(JoinPartContext::class);
            }

            return $this->getTypedRuleContext(JoinPartContext::class, $index);
        }

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterTableSourceNested($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitTableSourceNested($this);
            }
        }
    }
