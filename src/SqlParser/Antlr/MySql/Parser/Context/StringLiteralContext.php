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

    class StringLiteralContext extends ParserRuleContext
    {
        public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
        {
            parent::__construct($parent, $invokingState);
        }

        public function getRuleIndex(): int
        {
            return MySqlParser::RULE_stringLiteral;
        }

        /**
         * @return null|array<TerminalNode>|TerminalNode
         */
        public function STRING_LITERAL(?int $index = null)
        {
            if ($index === null) {
                return $this->getTokens(MySqlParser::STRING_LITERAL);
            }

            return $this->getToken(MySqlParser::STRING_LITERAL, $index);
        }

        public function START_NATIONAL_STRING_LITERAL(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::START_NATIONAL_STRING_LITERAL, 0);
        }

        public function STRING_CHARSET_NAME(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::STRING_CHARSET_NAME, 0);
        }

        public function COLLATE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::COLLATE, 0);
        }

        public function collationName(): ?CollationNameContext
        {
            return $this->getTypedRuleContext(CollationNameContext::class, 0);
        }

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterStringLiteral($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitStringLiteral($this);
            }
        }
    }
