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

    class QueryExpressionNointoContext extends ParserRuleContext
    {
        public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
        {
            parent::__construct($parent, $invokingState);
        }

        public function getRuleIndex(): int
        {
            return MySqlParser::RULE_queryExpressionNointo;
        }

        public function LR_BRACKET(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::LR_BRACKET, 0);
        }

        public function querySpecificationNointo(): ?QuerySpecificationNointoContext
        {
            return $this->getTypedRuleContext(QuerySpecificationNointoContext::class, 0);
        }

        public function RR_BRACKET(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::RR_BRACKET, 0);
        }

        public function queryExpressionNointo(): ?QueryExpressionNointoContext
        {
            return $this->getTypedRuleContext(QueryExpressionNointoContext::class, 0);
        }

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterQueryExpressionNointo($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitQueryExpressionNointo($this);
            }
        }
    }
