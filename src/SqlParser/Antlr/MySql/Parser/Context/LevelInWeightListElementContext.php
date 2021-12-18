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

    class LevelInWeightListElementContext extends ParserRuleContext
    {
        /**
         * @var null|Token
         */
        public $orderType;

        public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
        {
            parent::__construct($parent, $invokingState);
        }

        public function getRuleIndex(): int
        {
            return MySqlParser::RULE_levelInWeightListElement;
        }

        public function decimalLiteral(): ?DecimalLiteralContext
        {
            return $this->getTypedRuleContext(DecimalLiteralContext::class, 0);
        }

        public function ASC(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::ASC, 0);
        }

        public function DESC(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::DESC, 0);
        }

        public function REVERSE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::REVERSE, 0);
        }

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterLevelInWeightListElement($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitLevelInWeightListElement($this);
            }
        }
    }
