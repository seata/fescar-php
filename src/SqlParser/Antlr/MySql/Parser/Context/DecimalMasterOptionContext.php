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

    class DecimalMasterOptionContext extends ParserRuleContext
    {
        public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
        {
            parent::__construct($parent, $invokingState);
        }

        public function getRuleIndex(): int
        {
            return MySqlParser::RULE_decimalMasterOption;
        }

        public function MASTER_PORT(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::MASTER_PORT, 0);
        }

        public function MASTER_CONNECT_RETRY(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::MASTER_CONNECT_RETRY, 0);
        }

        public function MASTER_RETRY_COUNT(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::MASTER_RETRY_COUNT, 0);
        }

        public function MASTER_DELAY(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::MASTER_DELAY, 0);
        }

        public function MASTER_LOG_POS(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::MASTER_LOG_POS, 0);
        }

        public function RELAY_LOG_POS(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::RELAY_LOG_POS, 0);
        }

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterDecimalMasterOption($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitDecimalMasterOption($this);
            }
        }
    }
