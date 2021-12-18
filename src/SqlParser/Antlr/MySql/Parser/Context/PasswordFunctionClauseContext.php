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

    class PasswordFunctionClauseContext extends ParserRuleContext
    {
        /**
         * @var null|Token
         */
        public $functionName;

        public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
        {
            parent::__construct($parent, $invokingState);
        }

        public function getRuleIndex(): int
        {
            return MySqlParser::RULE_passwordFunctionClause;
        }

        public function LR_BRACKET(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::LR_BRACKET, 0);
        }

        public function functionArg(): ?FunctionArgContext
        {
            return $this->getTypedRuleContext(FunctionArgContext::class, 0);
        }

        public function RR_BRACKET(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::RR_BRACKET, 0);
        }

        public function PASSWORD(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::PASSWORD, 0);
        }

        public function OLD_PASSWORD(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::OLD_PASSWORD, 0);
        }

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterPasswordFunctionClause($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitPasswordFunctionClause($this);
            }
        }
    }
