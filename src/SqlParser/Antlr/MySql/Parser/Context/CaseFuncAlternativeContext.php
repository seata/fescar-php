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

    class CaseFuncAlternativeContext extends ParserRuleContext
    {
        /**
         * @var null|FunctionArgContext
         */
        public $condition;

        /**
         * @var null|FunctionArgContext
         */
        public $consequent;

        public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
        {
            parent::__construct($parent, $invokingState);
        }

        public function getRuleIndex(): int
        {
            return MySqlParser::RULE_caseFuncAlternative;
        }

        public function WHEN(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::WHEN, 0);
        }

        public function THEN(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::THEN, 0);
        }

        /**
         * @return null|array<FunctionArgContext>|FunctionArgContext
         */
        public function functionArg(?int $index = null)
        {
            if ($index === null) {
                return $this->getTypedRuleContexts(FunctionArgContext::class);
            }

            return $this->getTypedRuleContext(FunctionArgContext::class, $index);
        }

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterCaseFuncAlternative($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitCaseFuncAlternative($this);
            }
        }
    }
