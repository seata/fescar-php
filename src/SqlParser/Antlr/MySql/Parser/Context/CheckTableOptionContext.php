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

    class CheckTableOptionContext extends ParserRuleContext
    {
        public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
        {
            parent::__construct($parent, $invokingState);
        }

        public function getRuleIndex(): int
        {
            return MySqlParser::RULE_checkTableOption;
        }

        public function FOR(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::FOR, 0);
        }

        public function UPGRADE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::UPGRADE, 0);
        }

        public function QUICK(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::QUICK, 0);
        }

        public function FAST(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::FAST, 0);
        }

        public function MEDIUM(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::MEDIUM, 0);
        }

        public function EXTENDED(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::EXTENDED, 0);
        }

        public function CHANGED(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::CHANGED, 0);
        }

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterCheckTableOption($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitCheckTableOption($this);
            }
        }
    }
