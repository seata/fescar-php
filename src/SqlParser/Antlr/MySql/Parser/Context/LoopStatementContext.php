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

    class LoopStatementContext extends ParserRuleContext
    {
        public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
        {
            parent::__construct($parent, $invokingState);
        }

        public function getRuleIndex(): int
        {
            return MySqlParser::RULE_loopStatement;
        }

        /**
         * @return null|array<TerminalNode>|TerminalNode
         */
        public function LOOP(?int $index = null)
        {
            if ($index === null) {
                return $this->getTokens(MySqlParser::LOOP);
            }

            return $this->getToken(MySqlParser::LOOP, $index);
        }

        public function END(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::END, 0);
        }

        /**
         * @return null|array<UidContext>|UidContext
         */
        public function uid(?int $index = null)
        {
            if ($index === null) {
                return $this->getTypedRuleContexts(UidContext::class);
            }

            return $this->getTypedRuleContext(UidContext::class, $index);
        }

        public function COLON_SYMB(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::COLON_SYMB, 0);
        }

        /**
         * @return null|array<ProcedureSqlStatementContext>|ProcedureSqlStatementContext
         */
        public function procedureSqlStatement(?int $index = null)
        {
            if ($index === null) {
                return $this->getTypedRuleContexts(ProcedureSqlStatementContext::class);
            }

            return $this->getTypedRuleContext(ProcedureSqlStatementContext::class, $index);
        }

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterLoopStatement($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitLoopStatement($this);
            }
        }
    }
