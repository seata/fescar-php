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

    class UserResourceOptionContext extends ParserRuleContext
    {
        public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
        {
            parent::__construct($parent, $invokingState);
        }

        public function getRuleIndex(): int
        {
            return MySqlParser::RULE_userResourceOption;
        }

        public function MAX_QUERIES_PER_HOUR(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::MAX_QUERIES_PER_HOUR, 0);
        }

        public function decimalLiteral(): ?DecimalLiteralContext
        {
            return $this->getTypedRuleContext(DecimalLiteralContext::class, 0);
        }

        public function MAX_UPDATES_PER_HOUR(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::MAX_UPDATES_PER_HOUR, 0);
        }

        public function MAX_CONNECTIONS_PER_HOUR(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::MAX_CONNECTIONS_PER_HOUR, 0);
        }

        public function MAX_USER_CONNECTIONS(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::MAX_USER_CONNECTIONS, 0);
        }

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterUserResourceOption($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitUserResourceOption($this);
            }
        }
    }
