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
    use Hyperf\Seata\SqlParser\Antlr\MySql\Listener\MySqlParserListener;
    use Hyperf\Seata\SqlParser\Antlr\MySql\Parser\MySqlParser;

    class HandlerStatementContext extends ParserRuleContext
    {
        public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
        {
            parent::__construct($parent, $invokingState);
        }

        public function getRuleIndex(): int
        {
            return MySqlParser::RULE_handlerStatement;
        }

        public function handlerOpenStatement(): ?HandlerOpenStatementContext
        {
            return $this->getTypedRuleContext(HandlerOpenStatementContext::class, 0);
        }

        public function handlerReadIndexStatement(): ?HandlerReadIndexStatementContext
        {
            return $this->getTypedRuleContext(HandlerReadIndexStatementContext::class, 0);
        }

        public function handlerReadStatement(): ?HandlerReadStatementContext
        {
            return $this->getTypedRuleContext(HandlerReadStatementContext::class, 0);
        }

        public function handlerCloseStatement(): ?HandlerCloseStatementContext
        {
            return $this->getTypedRuleContext(HandlerCloseStatementContext::class, 0);
        }

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterHandlerStatement($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitHandlerStatement($this);
            }
        }
    }
