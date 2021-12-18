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

    class AlterViewContext extends ParserRuleContext
    {
        /**
         * @var null|Token
         */
        public $algType;

        /**
         * @var null|Token
         */
        public $secContext;

        /**
         * @var null|Token
         */
        public $checkOpt;

        public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
        {
            parent::__construct($parent, $invokingState);
        }

        public function getRuleIndex(): int
        {
            return MySqlParser::RULE_alterView;
        }

        public function ALTER(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::ALTER, 0);
        }

        public function VIEW(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::VIEW, 0);
        }

        public function fullId(): ?FullIdContext
        {
            return $this->getTypedRuleContext(FullIdContext::class, 0);
        }

        public function AS(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::AS, 0);
        }

        public function selectStatement(): ?SelectStatementContext
        {
            return $this->getTypedRuleContext(SelectStatementContext::class, 0);
        }

        public function ALGORITHM(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::ALGORITHM, 0);
        }

        public function EQUAL_SYMBOL(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::EQUAL_SYMBOL, 0);
        }

        public function ownerStatement(): ?OwnerStatementContext
        {
            return $this->getTypedRuleContext(OwnerStatementContext::class, 0);
        }

        public function SQL(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::SQL, 0);
        }

        public function SECURITY(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::SECURITY, 0);
        }

        public function LR_BRACKET(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::LR_BRACKET, 0);
        }

        public function uidList(): ?UidListContext
        {
            return $this->getTypedRuleContext(UidListContext::class, 0);
        }

        public function RR_BRACKET(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::RR_BRACKET, 0);
        }

        public function WITH(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::WITH, 0);
        }

        public function CHECK(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::CHECK, 0);
        }

        public function OPTION(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::OPTION, 0);
        }

        public function UNDEFINED(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::UNDEFINED, 0);
        }

        public function MERGE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::MERGE, 0);
        }

        public function TEMPTABLE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::TEMPTABLE, 0);
        }

        public function DEFINER(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::DEFINER, 0);
        }

        public function INVOKER(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::INVOKER, 0);
        }

        public function CASCADED(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::CASCADED, 0);
        }

        public function LOCAL(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::LOCAL, 0);
        }

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterAlterView($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitAlterView($this);
            }
        }
    }
