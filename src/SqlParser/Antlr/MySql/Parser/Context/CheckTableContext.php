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

    class CheckTableContext extends ParserRuleContext
    {
        public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
        {
            parent::__construct($parent, $invokingState);
        }

        public function getRuleIndex(): int
        {
            return MySqlParser::RULE_checkTable;
        }

        public function CHECK(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::CHECK, 0);
        }

        public function TABLE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::TABLE, 0);
        }

        public function tables(): ?TablesContext
        {
            return $this->getTypedRuleContext(TablesContext::class, 0);
        }

        /**
         * @return null|array<CheckTableOptionContext>|CheckTableOptionContext
         */
        public function checkTableOption(?int $index = null)
        {
            if ($index === null) {
                return $this->getTypedRuleContexts(CheckTableOptionContext::class);
            }

            return $this->getTypedRuleContext(CheckTableOptionContext::class, $index);
        }

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterCheckTable($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitCheckTable($this);
            }
        }
    }
