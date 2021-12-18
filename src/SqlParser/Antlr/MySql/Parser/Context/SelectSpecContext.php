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

    class SelectSpecContext extends ParserRuleContext
    {
        public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
        {
            parent::__construct($parent, $invokingState);
        }

        public function getRuleIndex(): int
        {
            return MySqlParser::RULE_selectSpec;
        }

        public function ALL(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::ALL, 0);
        }

        public function DISTINCT(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::DISTINCT, 0);
        }

        public function DISTINCTROW(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::DISTINCTROW, 0);
        }

        public function HIGH_PRIORITY(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::HIGH_PRIORITY, 0);
        }

        public function STRAIGHT_JOIN(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::STRAIGHT_JOIN, 0);
        }

        public function SQL_SMALL_RESULT(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::SQL_SMALL_RESULT, 0);
        }

        public function SQL_BIG_RESULT(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::SQL_BIG_RESULT, 0);
        }

        public function SQL_BUFFER_RESULT(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::SQL_BUFFER_RESULT, 0);
        }

        public function SQL_CACHE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::SQL_CACHE, 0);
        }

        public function SQL_NO_CACHE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::SQL_NO_CACHE, 0);
        }

        public function SQL_CALC_FOUND_ROWS(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::SQL_CALC_FOUND_ROWS, 0);
        }

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterSelectSpec($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitSelectSpec($this);
            }
        }
    }
