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

    class QuerySpecificationNointoContext extends ParserRuleContext
    {
        public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
        {
            parent::__construct($parent, $invokingState);
        }

        public function getRuleIndex(): int
        {
            return MySqlParser::RULE_querySpecificationNointo;
        }

        public function SELECT(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::SELECT, 0);
        }

        public function selectElements(): ?SelectElementsContext
        {
            return $this->getTypedRuleContext(SelectElementsContext::class, 0);
        }

        /**
         * @return null|array<SelectSpecContext>|SelectSpecContext
         */
        public function selectSpec(?int $index = null)
        {
            if ($index === null) {
                return $this->getTypedRuleContexts(SelectSpecContext::class);
            }

            return $this->getTypedRuleContext(SelectSpecContext::class, $index);
        }

        public function fromClause(): ?FromClauseContext
        {
            return $this->getTypedRuleContext(FromClauseContext::class, 0);
        }

        public function groupByClause(): ?GroupByClauseContext
        {
            return $this->getTypedRuleContext(GroupByClauseContext::class, 0);
        }

        public function havingClause(): ?HavingClauseContext
        {
            return $this->getTypedRuleContext(HavingClauseContext::class, 0);
        }

        public function windowClause(): ?WindowClauseContext
        {
            return $this->getTypedRuleContext(WindowClauseContext::class, 0);
        }

        public function orderByClause(): ?OrderByClauseContext
        {
            return $this->getTypedRuleContext(OrderByClauseContext::class, 0);
        }

        public function limitClause(): ?LimitClauseContext
        {
            return $this->getTypedRuleContext(LimitClauseContext::class, 0);
        }

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterQuerySpecificationNointo($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitQuerySpecificationNointo($this);
            }
        }
    }
