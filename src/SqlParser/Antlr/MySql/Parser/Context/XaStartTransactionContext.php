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

    class XaStartTransactionContext extends ParserRuleContext
    {
        /**
         * @var null|Token
         */
        public $xaStart;

        /**
         * @var null|Token
         */
        public $xaAction;

        public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
        {
            parent::__construct($parent, $invokingState);
        }

        public function getRuleIndex(): int
        {
            return MySqlParser::RULE_xaStartTransaction;
        }

        public function XA(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::XA, 0);
        }

        public function xid(): ?XidContext
        {
            return $this->getTypedRuleContext(XidContext::class, 0);
        }

        public function START(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::START, 0);
        }

        public function BEGIN(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::BEGIN, 0);
        }

        public function JOIN(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::JOIN, 0);
        }

        public function RESUME(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::RESUME, 0);
        }

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterXaStartTransaction($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitXaStartTransaction($this);
            }
        }
    }
