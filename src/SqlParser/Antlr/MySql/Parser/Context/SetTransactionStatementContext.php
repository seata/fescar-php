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

    class SetTransactionStatementContext extends ParserRuleContext
    {
        /**
         * @var null|Token
         */
        public $transactionContext;

        public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
        {
            parent::__construct($parent, $invokingState);
        }

        public function getRuleIndex(): int
        {
            return MySqlParser::RULE_setTransactionStatement;
        }

        public function SET(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::SET, 0);
        }

        public function TRANSACTION(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::TRANSACTION, 0);
        }

        /**
         * @return null|array<TransactionOptionContext>|TransactionOptionContext
         */
        public function transactionOption(?int $index = null)
        {
            if ($index === null) {
                return $this->getTypedRuleContexts(TransactionOptionContext::class);
            }

            return $this->getTypedRuleContext(TransactionOptionContext::class, $index);
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

        public function GLOBAL(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::GLOBAL, 0);
        }

        public function SESSION(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::SESSION, 0);
        }

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterSetTransactionStatement($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitSetTransactionStatement($this);
            }
        }
    }
