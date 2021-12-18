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

    class CreateFunctionContext extends ParserRuleContext
    {
        public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
        {
            parent::__construct($parent, $invokingState);
        }

        public function getRuleIndex(): int
        {
            return MySqlParser::RULE_createFunction;
        }

        public function CREATE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::CREATE, 0);
        }

        public function FUNCTION(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::FUNCTION, 0);
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

        public function RETURNS(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::RETURNS, 0);
        }

        public function dataType(): ?DataTypeContext
        {
            return $this->getTypedRuleContext(DataTypeContext::class, 0);
        }

        public function routineBody(): ?RoutineBodyContext
        {
            return $this->getTypedRuleContext(RoutineBodyContext::class, 0);
        }

        public function returnStatement(): ?ReturnStatementContext
        {
            return $this->getTypedRuleContext(ReturnStatementContext::class, 0);
        }

        public function ownerStatement(): ?OwnerStatementContext
        {
            return $this->getTypedRuleContext(OwnerStatementContext::class, 0);
        }

        /**
         * @return null|array<FunctionParameterContext>|FunctionParameterContext
         */
        public function functionParameter(?int $index = null)
        {
            if ($index === null) {
                return $this->getTypedRuleContexts(FunctionParameterContext::class);
            }

            return $this->getTypedRuleContext(FunctionParameterContext::class, $index);
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
                $listener->enterCreateFunction($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitCreateFunction($this);
            }
        }
    }
