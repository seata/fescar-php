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

    class TransactionModeContext extends ParserRuleContext
    {
        public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
        {
            parent::__construct($parent, $invokingState);
        }

        public function getRuleIndex(): int
        {
            return MySqlParser::RULE_transactionMode;
        }

        public function WITH(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::WITH, 0);
        }

        public function CONSISTENT(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::CONSISTENT, 0);
        }

        public function SNAPSHOT(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::SNAPSHOT, 0);
        }

        public function READ(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::READ, 0);
        }

        public function WRITE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::WRITE, 0);
        }

        public function ONLY(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::ONLY, 0);
        }

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterTransactionMode($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitTransactionMode($this);
            }
        }
    }
