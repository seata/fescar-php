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
    use Antlr\Antlr4\Runtime\Token;
    use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
    use Antlr\Antlr4\Runtime\Tree\TerminalNode;
    use Hyperf\Seata\SqlParser\Antlr\MySql\Listener\MySqlParserListener;
    use Hyperf\Seata\SqlParser\Antlr\MySql\Parser\MySqlParser;

    class SetAutocommitStatementContext extends ParserRuleContext
    {
        /**
         * @var null|Token
         */
        public $autocommitValue;

        public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
        {
            parent::__construct($parent, $invokingState);
        }

        public function getRuleIndex(): int
        {
            return MySqlParser::RULE_setAutocommitStatement;
        }

        public function SET(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::SET, 0);
        }

        public function AUTOCOMMIT(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::AUTOCOMMIT, 0);
        }

        public function EQUAL_SYMBOL(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::EQUAL_SYMBOL, 0);
        }

        public function ZERO_DECIMAL(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::ZERO_DECIMAL, 0);
        }

        public function ONE_DECIMAL(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::ONE_DECIMAL, 0);
        }

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterSetAutocommitStatement($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitSetAutocommitStatement($this);
            }
        }
    }
