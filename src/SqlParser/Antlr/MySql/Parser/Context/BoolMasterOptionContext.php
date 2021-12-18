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

    class BoolMasterOptionContext extends ParserRuleContext
    {
        public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
        {
            parent::__construct($parent, $invokingState);
        }

        public function getRuleIndex(): int
        {
            return MySqlParser::RULE_boolMasterOption;
        }

        public function MASTER_AUTO_POSITION(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::MASTER_AUTO_POSITION, 0);
        }

        public function MASTER_SSL(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::MASTER_SSL, 0);
        }

        public function MASTER_SSL_VERIFY_SERVER_CERT(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::MASTER_SSL_VERIFY_SERVER_CERT, 0);
        }

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterBoolMasterOption($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitBoolMasterOption($this);
            }
        }
    }
