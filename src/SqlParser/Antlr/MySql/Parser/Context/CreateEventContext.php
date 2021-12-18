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

    class CreateEventContext extends ParserRuleContext
    {
        public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
        {
            parent::__construct($parent, $invokingState);
        }

        public function getRuleIndex(): int
        {
            return MySqlParser::RULE_createEvent;
        }

        public function CREATE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::CREATE, 0);
        }

        public function EVENT(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::EVENT, 0);
        }

        public function fullId(): ?FullIdContext
        {
            return $this->getTypedRuleContext(FullIdContext::class, 0);
        }

        /**
         * @return null|array<TerminalNode>|TerminalNode
         */
        public function ON(?int $index = null)
        {
            if ($index === null) {
                return $this->getTokens(MySqlParser::ON);
            }

            return $this->getToken(MySqlParser::ON, $index);
        }

        public function SCHEDULE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::SCHEDULE, 0);
        }

        public function scheduleExpression(): ?ScheduleExpressionContext
        {
            return $this->getTypedRuleContext(ScheduleExpressionContext::class, 0);
        }

        public function DO(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::DO, 0);
        }

        public function routineBody(): ?RoutineBodyContext
        {
            return $this->getTypedRuleContext(RoutineBodyContext::class, 0);
        }

        public function ownerStatement(): ?OwnerStatementContext
        {
            return $this->getTypedRuleContext(OwnerStatementContext::class, 0);
        }

        public function ifNotExists(): ?IfNotExistsContext
        {
            return $this->getTypedRuleContext(IfNotExistsContext::class, 0);
        }

        public function COMPLETION(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::COMPLETION, 0);
        }

        public function PRESERVE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::PRESERVE, 0);
        }

        public function enableType(): ?EnableTypeContext
        {
            return $this->getTypedRuleContext(EnableTypeContext::class, 0);
        }

        public function COMMENT(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::COMMENT, 0);
        }

        public function STRING_LITERAL(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::STRING_LITERAL, 0);
        }

        public function NOT(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::NOT, 0);
        }

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterCreateEvent($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitCreateEvent($this);
            }
        }
    }
