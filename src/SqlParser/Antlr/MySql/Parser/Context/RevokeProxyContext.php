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

    class RevokeProxyContext extends ParserRuleContext
    {
        /**
         * @var null|UserNameContext
         */
        public $onUser;

        /**
         * @var null|UserNameContext
         */
        public $fromFirst;

        /**
         * @var null|UserNameContext
         */
        public $userName;

        /**
         * @var null|array<UserNameContext>
         */
        public $fromOther;

        public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
        {
            parent::__construct($parent, $invokingState);
        }

        public function getRuleIndex(): int
        {
            return MySqlParser::RULE_revokeProxy;
        }

        public function REVOKE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::REVOKE, 0);
        }

        public function PROXY(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::PROXY, 0);
        }

        public function ON(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::ON, 0);
        }

        public function FROM(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::FROM, 0);
        }

        /**
         * @return null|array<UserNameContext>|UserNameContext
         */
        public function userName(?int $index = null)
        {
            if ($index === null) {
                return $this->getTypedRuleContexts(UserNameContext::class);
            }

            return $this->getTypedRuleContext(UserNameContext::class, $index);
        }

        /**
         * @return null|array<TerminalNode>|TerminalNode
         */
        public function COMMA(?int $index = null)
        {
            if ($index === null) {
                return $this->getTokens(MySqlParser::COMMA);
            }

            return $this->getToken(MySqlParser::COMMA, $index);
        }

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterRevokeProxy($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitRevokeProxy($this);
            }
        }
    }
