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

    class KillStatementContext extends ParserRuleContext
    {
        /**
         * @var null|Token
         */
        public $connectionFormat;

        public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
        {
            parent::__construct($parent, $invokingState);
        }

        public function getRuleIndex(): int
        {
            return MySqlParser::RULE_killStatement;
        }

        public function KILL(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::KILL, 0);
        }

        /**
         * @return null|array<DecimalLiteralContext>|DecimalLiteralContext
         */
        public function decimalLiteral(?int $index = null)
        {
            if ($index === null) {
                return $this->getTypedRuleContexts(DecimalLiteralContext::class);
            }

            return $this->getTypedRuleContext(DecimalLiteralContext::class, $index);
        }

        public function CONNECTION(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::CONNECTION, 0);
        }

        public function QUERY(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::QUERY, 0);
        }

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterKillStatement($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitKillStatement($this);
            }
        }
    }
