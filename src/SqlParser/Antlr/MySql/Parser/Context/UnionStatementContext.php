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

    class UnionStatementContext extends ParserRuleContext
    {
        /**
         * @var null|Token
         */
        public $unionType;

        public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
        {
            parent::__construct($parent, $invokingState);
        }

        public function getRuleIndex(): int
        {
            return MySqlParser::RULE_unionStatement;
        }

        public function UNION(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::UNION, 0);
        }

        public function querySpecificationNointo(): ?QuerySpecificationNointoContext
        {
            return $this->getTypedRuleContext(QuerySpecificationNointoContext::class, 0);
        }

        public function queryExpressionNointo(): ?QueryExpressionNointoContext
        {
            return $this->getTypedRuleContext(QueryExpressionNointoContext::class, 0);
        }

        public function ALL(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::ALL, 0);
        }

        public function DISTINCT(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::DISTINCT, 0);
        }

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterUnionStatement($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitUnionStatement($this);
            }
        }
    }
