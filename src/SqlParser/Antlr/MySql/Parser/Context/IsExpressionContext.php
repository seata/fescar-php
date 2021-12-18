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

    class IsExpressionContext extends ExpressionContext
    {
        /**
         * @var null|Token
         */
        public $testValue;

        public function __construct(ExpressionContext $context)
        {
            parent::__construct($context);

            $this->copyFrom($context);
        }

        public function predicate(): ?PredicateContext
        {
            return $this->getTypedRuleContext(PredicateContext::class, 0);
        }

        public function IS(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::IS, 0);
        }

        public function true(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::TRUE, 0);
        }

        public function false(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::FALSE, 0);
        }

        public function UNKNOWN(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::UNKNOWN, 0);
        }

        public function NOT(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::NOT, 0);
        }

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterIsExpression($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitIsExpression($this);
            }
        }
    }
