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

    class VariableClauseContext extends ParserRuleContext
    {
        public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
        {
            parent::__construct($parent, $invokingState);
        }

        public function getRuleIndex(): int
        {
            return MySqlParser::RULE_variableClause;
        }

        public function LOCAL_ID(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::LOCAL_ID, 0);
        }

        public function GLOBAL_ID(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::GLOBAL_ID, 0);
        }

        public function uid(): ?UidContext
        {
            return $this->getTypedRuleContext(UidContext::class, 0);
        }

        public function GLOBAL(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::GLOBAL, 0);
        }

        public function SESSION(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::SESSION, 0);
        }

        public function LOCAL(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::LOCAL, 0);
        }

        /**
         * @return null|array<TerminalNode>|TerminalNode
         */
        public function AT_SIGN(?int $index = null)
        {
            if ($index === null) {
                return $this->getTokens(MySqlParser::AT_SIGN);
            }

            return $this->getToken(MySqlParser::AT_SIGN, $index);
        }

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterVariableClause($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitVariableClause($this);
            }
        }
    }
