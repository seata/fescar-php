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

    class GrantStatementContext extends ParserRuleContext
    {
        /**
         * @var null|Token
         */
        public $privilegeObject;

        /**
         * @var null|Token
         */
        public $tlsNone;

        public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
        {
            parent::__construct($parent, $invokingState);
        }

        public function getRuleIndex(): int
        {
            return MySqlParser::RULE_grantStatement;
        }

        /**
         * @return null|array<TerminalNode>|TerminalNode
         */
        public function GRANT(?int $index = null)
        {
            if ($index === null) {
                return $this->getTokens(MySqlParser::GRANT);
            }

            return $this->getToken(MySqlParser::GRANT, $index);
        }

        /**
         * @return null|array<PrivelegeClauseContext>|PrivelegeClauseContext
         */
        public function privelegeClause(?int $index = null)
        {
            if ($index === null) {
                return $this->getTypedRuleContexts(PrivelegeClauseContext::class);
            }

            return $this->getTypedRuleContext(PrivelegeClauseContext::class, $index);
        }

        public function ON(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::ON, 0);
        }

        public function privilegeLevel(): ?PrivilegeLevelContext
        {
            return $this->getTypedRuleContext(PrivilegeLevelContext::class, 0);
        }

        public function TO(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::TO, 0);
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

        /**
         * @return null|array<TerminalNode>|TerminalNode
         */
        public function WITH(?int $index = null)
        {
            if ($index === null) {
                return $this->getTokens(MySqlParser::WITH);
            }

            return $this->getToken(MySqlParser::WITH, $index);
        }

        public function AS(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::AS, 0);
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

        public function ROLE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::ROLE, 0);
        }

        public function roleOption(): ?RoleOptionContext
        {
            return $this->getTypedRuleContext(RoleOptionContext::class, 0);
        }

        public function TABLE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::TABLE, 0);
        }

        public function FUNCTION(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::FUNCTION, 0);
        }

        public function PROCEDURE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::PROCEDURE, 0);
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
         * @return null|array<TerminalNode>|TerminalNode
         */
        public function OPTION(?int $index = null)
        {
            if ($index === null) {
                return $this->getTokens(MySqlParser::OPTION);
            }

            return $this->getToken(MySqlParser::OPTION, $index);
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

        /**
         * @return null|array<UidContext>|UidContext
         */
        public function uid(?int $index = null)
        {
            if ($index === null) {
                return $this->getTypedRuleContexts(UidContext::class);
            }

            return $this->getTypedRuleContext(UidContext::class, $index);
        }

        public function ADMIN(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::ADMIN, 0);
        }

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterGrantStatement($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitGrantStatement($this);
            }
        }
    }
