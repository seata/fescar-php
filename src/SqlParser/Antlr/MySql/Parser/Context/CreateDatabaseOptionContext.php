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

    class CreateDatabaseOptionContext extends ParserRuleContext
    {
        public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
        {
            parent::__construct($parent, $invokingState);
        }

        public function getRuleIndex(): int
        {
            return MySqlParser::RULE_createDatabaseOption;
        }

        public function CHARACTER(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::CHARACTER, 0);
        }

        public function SET(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::SET, 0);
        }

        public function CHARSET(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::CHARSET, 0);
        }

        public function charsetName(): ?CharsetNameContext
        {
            return $this->getTypedRuleContext(CharsetNameContext::class, 0);
        }

        /**
         * @return null|array<TerminalNode>|TerminalNode
         */
        public function DEFAULT(?int $index = null)
        {
            if ($index === null) {
                return $this->getTokens(MySqlParser::DEFAULT);
            }

            return $this->getToken(MySqlParser::DEFAULT, $index);
        }

        public function EQUAL_SYMBOL(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::EQUAL_SYMBOL, 0);
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
                $listener->enterCreateDatabaseOption($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitCreateDatabaseOption($this);
            }
        }
    }
