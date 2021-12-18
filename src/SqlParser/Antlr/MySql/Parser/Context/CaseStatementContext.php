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

    class CaseStatementContext extends ParserRuleContext
    {
        public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
        {
            parent::__construct($parent, $invokingState);
        }

        public function getRuleIndex(): int
        {
            return MySqlParser::RULE_caseStatement;
        }

        /**
         * @return null|array<TerminalNode>|TerminalNode
         */
        public function CASE(?int $index = null)
        {
            if ($index === null) {
                return $this->getTokens(MySqlParser::CASE);
            }

            return $this->getToken(MySqlParser::CASE, $index);
        }

        public function END(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::END, 0);
        }

        public function uid(): ?UidContext
        {
            return $this->getTypedRuleContext(UidContext::class, 0);
        }

        public function expression(): ?ExpressionContext
        {
            return $this->getTypedRuleContext(ExpressionContext::class, 0);
        }

        /**
         * @return null|array<CaseAlternativeContext>|CaseAlternativeContext
         */
        public function caseAlternative(?int $index = null)
        {
            if ($index === null) {
                return $this->getTypedRuleContexts(CaseAlternativeContext::class);
            }

            return $this->getTypedRuleContext(CaseAlternativeContext::class, $index);
        }

        public function ELSE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::ELSE, 0);
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
                $listener->enterCaseStatement($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitCaseStatement($this);
            }
        }
    }
