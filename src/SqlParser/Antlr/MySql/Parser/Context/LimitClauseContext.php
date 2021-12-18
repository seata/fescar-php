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

    class LimitClauseContext extends ParserRuleContext
    {
        /**
         * @var null|LimitClauseAtomContext
         */
        public $offset;

        /**
         * @var null|LimitClauseAtomContext
         */
        public $limit;

        public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
        {
            parent::__construct($parent, $invokingState);
        }

        public function getRuleIndex(): int
        {
            return MySqlParser::RULE_limitClause;
        }

        public function LIMIT(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::LIMIT, 0);
        }

        public function OFFSET(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::OFFSET, 0);
        }

        /**
         * @return null|array<LimitClauseAtomContext>|LimitClauseAtomContext
         */
        public function limitClauseAtom(?int $index = null)
        {
            if ($index === null) {
                return $this->getTypedRuleContexts(LimitClauseAtomContext::class);
            }

            return $this->getTypedRuleContext(LimitClauseAtomContext::class, $index);
        }

        public function COMMA(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::COMMA, 0);
        }

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterLimitClause($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitLimitClause($this);
            }
        }
    }
