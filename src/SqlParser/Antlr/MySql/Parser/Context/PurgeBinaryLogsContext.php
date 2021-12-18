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

    class PurgeBinaryLogsContext extends ParserRuleContext
    {
        /**
         * @var null|Token
         */
        public $purgeFormat;

        /**
         * @var null|Token
         */
        public $fileName;

        /**
         * @var null|Token
         */
        public $timeValue;

        public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
        {
            parent::__construct($parent, $invokingState);
        }

        public function getRuleIndex(): int
        {
            return MySqlParser::RULE_purgeBinaryLogs;
        }

        public function PURGE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::PURGE, 0);
        }

        public function LOGS(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::LOGS, 0);
        }

        public function BINARY(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::BINARY, 0);
        }

        public function MASTER(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::MASTER, 0);
        }

        public function TO(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::TO, 0);
        }

        public function BEFORE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::BEFORE, 0);
        }

        public function STRING_LITERAL(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::STRING_LITERAL, 0);
        }

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterPurgeBinaryLogs($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitPurgeBinaryLogs($this);
            }
        }
    }
