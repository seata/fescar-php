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

    class ScalarFunctionNameContext extends ParserRuleContext
    {
        public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
        {
            parent::__construct($parent, $invokingState);
        }

        public function getRuleIndex(): int
        {
            return MySqlParser::RULE_scalarFunctionName;
        }

        public function functionNameBase(): ?FunctionNameBaseContext
        {
            return $this->getTypedRuleContext(FunctionNameBaseContext::class, 0);
        }

        public function ASCII(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::ASCII, 0);
        }

        public function CURDATE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::CURDATE, 0);
        }

        public function CURRENT_DATE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::CURRENT_DATE, 0);
        }

        public function CURRENT_TIME(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::CURRENT_TIME, 0);
        }

        public function CURRENT_TIMESTAMP(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::CURRENT_TIMESTAMP, 0);
        }

        public function CURTIME(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::CURTIME, 0);
        }

        public function DATE_ADD(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::DATE_ADD, 0);
        }

        public function DATE_SUB(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::DATE_SUB, 0);
        }

        public function IF(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::IF, 0);
        }

        public function INSERT(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::INSERT, 0);
        }

        public function LOCALTIME(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::LOCALTIME, 0);
        }

        public function LOCALTIMESTAMP(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::LOCALTIMESTAMP, 0);
        }

        public function MID(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::MID, 0);
        }

        public function NOW(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::NOW, 0);
        }

        public function REPLACE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::REPLACE, 0);
        }

        public function SUBSTR(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::SUBSTR, 0);
        }

        public function SUBSTRING(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::SUBSTRING, 0);
        }

        public function SYSDATE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::SYSDATE, 0);
        }

        public function TRIM(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::TRIM, 0);
        }

        public function UTC_DATE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::UTC_DATE, 0);
        }

        public function UTC_TIME(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::UTC_TIME, 0);
        }

        public function UTC_TIMESTAMP(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::UTC_TIMESTAMP, 0);
        }

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterScalarFunctionName($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitScalarFunctionName($this);
            }
        }
    }
