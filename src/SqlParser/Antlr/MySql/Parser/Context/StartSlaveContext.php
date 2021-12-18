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

    class StartSlaveContext extends ParserRuleContext
    {
        public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
        {
            parent::__construct($parent, $invokingState);
        }

        public function getRuleIndex(): int
        {
            return MySqlParser::RULE_startSlave;
        }

        public function START(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::START, 0);
        }

        public function SLAVE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::SLAVE, 0);
        }

        /**
         * @return null|array<ThreadTypeContext>|ThreadTypeContext
         */
        public function threadType(?int $index = null)
        {
            if ($index === null) {
                return $this->getTypedRuleContexts(ThreadTypeContext::class);
            }

            return $this->getTypedRuleContext(ThreadTypeContext::class, $index);
        }

        public function UNTIL(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::UNTIL, 0);
        }

        public function untilOption(): ?UntilOptionContext
        {
            return $this->getTypedRuleContext(UntilOptionContext::class, 0);
        }

        /**
         * @return null|array<ConnectionOptionContext>|ConnectionOptionContext
         */
        public function connectionOption(?int $index = null)
        {
            if ($index === null) {
                return $this->getTypedRuleContexts(ConnectionOptionContext::class);
            }

            return $this->getTypedRuleContext(ConnectionOptionContext::class, $index);
        }

        public function channelOption(): ?ChannelOptionContext
        {
            return $this->getTypedRuleContext(ChannelOptionContext::class, 0);
        }

        /**
         * @return null|array<TerminalNode>|TerminalNode
         */
        public function COMMA(?int $index = null)
        {
            if ($index === null) {
                return $this->getTokens(MySqlParser::COMMA);
            }

            return $this->getToken(MySqlParser::COMMA, $index);
        }

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterStartSlave($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitStartSlave($this);
            }
        }
    }
