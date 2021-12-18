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

    class NotExpressionContext extends ExpressionContext
    {
        /**
         * @var null|Token
         */
        public $notOperator;

        public function __construct(ExpressionContext $context)
        {
            parent::__construct($context);

            $this->copyFrom($context);
        }

        public function expression(): ?ExpressionContext
        {
            return $this->getTypedRuleContext(ExpressionContext::class, 0);
        }

        public function NOT(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::NOT, 0);
        }

        public function EXCLAMATION_SYMBOL(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::EXCLAMATION_SYMBOL, 0);
        }

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterNotExpression($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitNotExpression($this);
            }
        }
    }
