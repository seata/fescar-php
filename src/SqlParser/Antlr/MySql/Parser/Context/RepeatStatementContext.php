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

    class RepeatStatementContext extends ParserRuleContext
    {
        public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
        {
            parent::__construct($parent, $invokingState);
        }

        public function getRuleIndex(): int
        {
            return MySqlParser::RULE_repeatStatement;
        }

        /**
         * @return null|array<TerminalNode>|TerminalNode
         */
        public function REPEAT(?int $index = null)
        {
            if ($index === null) {
                return $this->getTokens(MySqlParser::REPEAT);
            }

            return $this->getToken(MySqlParser::REPEAT, $index);
        }

        public function UNTIL(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::UNTIL, 0);
        }

        public function expression(): ?ExpressionContext
        {
            return $this->getTypedRuleContext(ExpressionContext::class, 0);
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
                $listener->enterRepeatStatement($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitRepeatStatement($this);
            }
        }
    }
