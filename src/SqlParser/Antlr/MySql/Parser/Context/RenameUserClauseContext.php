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

    class RenameUserClauseContext extends ParserRuleContext
    {
        /**
         * @var null|UserNameContext
         */
        public $fromFirst;

        /**
         * @var null|UserNameContext
         */
        public $toFirst;

        public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
        {
            parent::__construct($parent, $invokingState);
        }

        public function getRuleIndex(): int
        {
            return MySqlParser::RULE_renameUserClause;
        }

        public function TO(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::TO, 0);
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

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterRenameUserClause($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitRenameUserClause($this);
            }
        }
    }
