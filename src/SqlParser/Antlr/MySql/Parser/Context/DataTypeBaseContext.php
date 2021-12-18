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

    class DataTypeBaseContext extends ParserRuleContext
    {
        public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
        {
            parent::__construct($parent, $invokingState);
        }

        public function getRuleIndex(): int
        {
            return MySqlParser::RULE_dataTypeBase;
        }

        public function DATE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::DATE, 0);
        }

        public function TIME(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::TIME, 0);
        }

        public function TIMESTAMP(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::TIMESTAMP, 0);
        }

        public function DATETIME(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::DATETIME, 0);
        }

        public function YEAR(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::YEAR, 0);
        }

        public function ENUM(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::ENUM, 0);
        }

        public function TEXT(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::TEXT, 0);
        }

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterDataTypeBase($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitDataTypeBase($this);
            }
        }
    }
