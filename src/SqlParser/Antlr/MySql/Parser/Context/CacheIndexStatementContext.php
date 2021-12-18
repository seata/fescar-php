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

    class CacheIndexStatementContext extends ParserRuleContext
    {
        /**
         * @var null|UidContext
         */
        public $schema;

        public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
        {
            parent::__construct($parent, $invokingState);
        }

        public function getRuleIndex(): int
        {
            return MySqlParser::RULE_cacheIndexStatement;
        }

        public function CACHE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::CACHE, 0);
        }

        public function INDEX(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::INDEX, 0);
        }

        /**
         * @return null|array<TableIndexesContext>|TableIndexesContext
         */
        public function tableIndexes(?int $index = null)
        {
            if ($index === null) {
                return $this->getTypedRuleContexts(TableIndexesContext::class);
            }

            return $this->getTypedRuleContext(TableIndexesContext::class, $index);
        }

        public function IN(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::IN, 0);
        }

        public function uid(): ?UidContext
        {
            return $this->getTypedRuleContext(UidContext::class, 0);
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

        public function PARTITION(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::PARTITION, 0);
        }

        public function LR_BRACKET(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::LR_BRACKET, 0);
        }

        public function RR_BRACKET(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::RR_BRACKET, 0);
        }

        public function uidList(): ?UidListContext
        {
            return $this->getTypedRuleContext(UidListContext::class, 0);
        }

        public function ALL(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::ALL, 0);
        }

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterCacheIndexStatement($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitCacheIndexStatement($this);
            }
        }
    }
