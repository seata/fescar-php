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

    class OptimizeTableContext extends ParserRuleContext
    {
        /**
         * @var null|Token
         */
        public $actionOption;

        public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
        {
            parent::__construct($parent, $invokingState);
        }

        public function getRuleIndex(): int
        {
            return MySqlParser::RULE_optimizeTable;
        }

        public function OPTIMIZE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::OPTIMIZE, 0);
        }

        public function tableNames(): ?TableNamesContext
        {
            return $this->getTypedRuleContext(TableNamesContext::class, 0);
        }

        public function TABLE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::TABLE, 0);
        }

        public function TABLES(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::TABLES, 0);
        }

        public function NO_WRITE_TO_BINLOG(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::NO_WRITE_TO_BINLOG, 0);
        }

        public function LOCAL(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::LOCAL, 0);
        }

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterOptimizeTable($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitOptimizeTable($this);
            }
        }
    }
