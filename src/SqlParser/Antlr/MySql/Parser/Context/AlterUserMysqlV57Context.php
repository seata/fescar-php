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

    use Antlr\Antlr4\Runtime\Token;
    use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
    use Antlr\Antlr4\Runtime\Tree\TerminalNode;
    use Hyperf\Seata\SqlParser\Antlr\MySql\Listener\MySqlParserListener;
    use Hyperf\Seata\SqlParser\Antlr\MySql\Parser\MySqlParser;

    class AlterUserMysqlV57Context extends AlterUserContext
    {
        /**
         * @var null|Token
         */
        public $tlsNone;

        public function __construct(AlterUserContext $context)
        {
            parent::__construct($context);

            $this->copyFrom($context);
        }

        public function ALTER(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::ALTER, 0);
        }

        public function USER(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::USER, 0);
        }

        /**
         * @return null|array<UserAuthOptionContext>|UserAuthOptionContext
         */
        public function userAuthOption(?int $index = null)
        {
            if ($index === null) {
                return $this->getTypedRuleContexts(UserAuthOptionContext::class);
            }

            return $this->getTypedRuleContext(UserAuthOptionContext::class, $index);
        }

        public function ifExists(): ?IfExistsContext
        {
            return $this->getTypedRuleContext(IfExistsContext::class, 0);
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

        public function REQUIRE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::REQUIRE, 0);
        }

        public function WITH(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::WITH, 0);
        }

        /**
         * @return null|array<UserPasswordOptionContext>|UserPasswordOptionContext
         */
        public function userPasswordOption(?int $index = null)
        {
            if ($index === null) {
                return $this->getTypedRuleContexts(UserPasswordOptionContext::class);
            }

            return $this->getTypedRuleContext(UserPasswordOptionContext::class, $index);
        }

        /**
         * @return null|array<UserLockOptionContext>|UserLockOptionContext
         */
        public function userLockOption(?int $index = null)
        {
            if ($index === null) {
                return $this->getTypedRuleContexts(UserLockOptionContext::class);
            }

            return $this->getTypedRuleContext(UserLockOptionContext::class, $index);
        }

        /**
         * @return null|array<TlsOptionContext>|TlsOptionContext
         */
        public function tlsOption(?int $index = null)
        {
            if ($index === null) {
                return $this->getTypedRuleContexts(TlsOptionContext::class);
            }

            return $this->getTypedRuleContext(TlsOptionContext::class, $index);
        }

        public function NONE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::NONE, 0);
        }

        /**
         * @return null|array<UserResourceOptionContext>|UserResourceOptionContext
         */
        public function userResourceOption(?int $index = null)
        {
            if ($index === null) {
                return $this->getTypedRuleContexts(UserResourceOptionContext::class);
            }

            return $this->getTypedRuleContext(UserResourceOptionContext::class, $index);
        }

        /**
         * @return null|array<TerminalNode>|TerminalNode
         */
        public function AND(?int $index = null)
        {
            if ($index === null) {
                return $this->getTokens(MySqlParser::AND);
            }

            return $this->getToken(MySqlParser::AND, $index);
        }

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterAlterUserMysqlV57($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitAlterUserMysqlV57($this);
            }
        }
    }
