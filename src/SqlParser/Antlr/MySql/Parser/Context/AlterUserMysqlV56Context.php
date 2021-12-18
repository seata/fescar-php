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

    use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
    use Antlr\Antlr4\Runtime\Tree\TerminalNode;
    use Hyperf\Seata\SqlParser\Antlr\MySql\Listener\MySqlParserListener;
    use Hyperf\Seata\SqlParser\Antlr\MySql\Parser\MySqlParser;

    class AlterUserMysqlV56Context extends AlterUserContext
    {
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
         * @return null|array<UserSpecificationContext>|UserSpecificationContext
         */
        public function userSpecification(?int $index = null)
        {
            if ($index === null) {
                return $this->getTypedRuleContexts(UserSpecificationContext::class);
            }

            return $this->getTypedRuleContext(UserSpecificationContext::class, $index);
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
                $listener->enterAlterUserMysqlV56($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitAlterUserMysqlV56($this);
            }
        }
    }
