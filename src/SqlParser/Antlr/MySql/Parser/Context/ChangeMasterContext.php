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

    class ChangeMasterContext extends ParserRuleContext
    {
        public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
        {
            parent::__construct($parent, $invokingState);
        }

        public function getRuleIndex(): int
        {
            return MySqlParser::RULE_changeMaster;
        }

        public function CHANGE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::CHANGE, 0);
        }

        public function MASTER(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::MASTER, 0);
        }

        public function TO(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::TO, 0);
        }

        /**
         * @return null|array<MasterOptionContext>|MasterOptionContext
         */
        public function masterOption(?int $index = null)
        {
            if ($index === null) {
                return $this->getTypedRuleContexts(MasterOptionContext::class);
            }

            return $this->getTypedRuleContext(MasterOptionContext::class, $index);
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

        public function channelOption(): ?ChannelOptionContext
        {
            return $this->getTypedRuleContext(ChannelOptionContext::class, 0);
        }

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterChangeMaster($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitChangeMaster($this);
            }
        }
    }
