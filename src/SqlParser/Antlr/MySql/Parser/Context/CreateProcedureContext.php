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

    class CreateProcedureContext extends ParserRuleContext
    {
        public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
        {
            parent::__construct($parent, $invokingState);
        }

        public function getRuleIndex(): int
        {
            return MySqlParser::RULE_createProcedure;
        }

        public function CREATE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::CREATE, 0);
        }

        public function PROCEDURE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::PROCEDURE, 0);
        }

        public function fullId(): ?FullIdContext
        {
            return $this->getTypedRuleContext(FullIdContext::class, 0);
        }

        public function LR_BRACKET(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::LR_BRACKET, 0);
        }

        public function RR_BRACKET(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::RR_BRACKET, 0);
        }

        public function routineBody(): ?RoutineBodyContext
        {
            return $this->getTypedRuleContext(RoutineBodyContext::class, 0);
        }

        public function ownerStatement(): ?OwnerStatementContext
        {
            return $this->getTypedRuleContext(OwnerStatementContext::class, 0);
        }

        /**
         * @return null|array<ProcedureParameterContext>|ProcedureParameterContext
         */
        public function procedureParameter(?int $index = null)
        {
            if ($index === null) {
                return $this->getTypedRuleContexts(ProcedureParameterContext::class);
            }

            return $this->getTypedRuleContext(ProcedureParameterContext::class, $index);
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

        /**
         * @return null|array<RoutineOptionContext>|RoutineOptionContext
         */
        public function routineOption(?int $index = null)
        {
            if ($index === null) {
                return $this->getTypedRuleContexts(RoutineOptionContext::class);
            }

            return $this->getTypedRuleContext(RoutineOptionContext::class, $index);
        }

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterCreateProcedure($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitCreateProcedure($this);
            }
        }
    }
