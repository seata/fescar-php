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

    class ChangeReplicationFilterContext extends ParserRuleContext
    {
        public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
        {
            parent::__construct($parent, $invokingState);
        }

        public function getRuleIndex(): int
        {
            return MySqlParser::RULE_changeReplicationFilter;
        }

        public function CHANGE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::CHANGE, 0);
        }

        public function REPLICATION(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::REPLICATION, 0);
        }

        public function FILTER(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::FILTER, 0);
        }

        /**
         * @return null|array<ReplicationFilterContext>|ReplicationFilterContext
         */
        public function replicationFilter(?int $index = null)
        {
            if ($index === null) {
                return $this->getTypedRuleContexts(ReplicationFilterContext::class);
            }

            return $this->getTypedRuleContext(ReplicationFilterContext::class, $index);
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
                $listener->enterChangeReplicationFilter($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitChangeReplicationFilter($this);
            }
        }
    }
