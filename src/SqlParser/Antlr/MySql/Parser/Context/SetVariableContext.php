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

    class SetVariableContext extends SetStatementContext
    {
        public function __construct(SetStatementContext $context)
        {
            parent::__construct($context);

            $this->copyFrom($context);
        }

        public function SET(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::SET, 0);
        }

        /**
         * @return null|array<VariableClauseContext>|VariableClauseContext
         */
        public function variableClause(?int $index = null)
        {
            if ($index === null) {
                return $this->getTypedRuleContexts(VariableClauseContext::class);
            }

            return $this->getTypedRuleContext(VariableClauseContext::class, $index);
        }

        /**
         * @return null|array<ExpressionContext>|ExpressionContext
         */
        public function expression(?int $index = null)
        {
            if ($index === null) {
                return $this->getTypedRuleContexts(ExpressionContext::class);
            }

            return $this->getTypedRuleContext(ExpressionContext::class, $index);
        }

        /**
         * @return null|array<TerminalNode>|TerminalNode
         */
        public function EQUAL_SYMBOL(?int $index = null)
        {
            if ($index === null) {
                return $this->getTokens(MySqlParser::EQUAL_SYMBOL);
            }

            return $this->getToken(MySqlParser::EQUAL_SYMBOL, $index);
        }

        /**
         * @return null|array<TerminalNode>|TerminalNode
         */
        public function VAR_ASSIGN(?int $index = null)
        {
            if ($index === null) {
                return $this->getTokens(MySqlParser::VAR_ASSIGN);
            }

            return $this->getToken(MySqlParser::VAR_ASSIGN, $index);
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
                $listener->enterSetVariable($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitSetVariable($this);
            }
        }
    }
