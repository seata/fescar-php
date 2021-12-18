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

    class DropTableContext extends ParserRuleContext
    {
        /**
         * @var null|Token
         */
        public $dropType;

        public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
        {
            parent::__construct($parent, $invokingState);
        }

        public function getRuleIndex(): int
        {
            return MySqlParser::RULE_dropTable;
        }

        public function DROP(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::DROP, 0);
        }

        public function TABLE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::TABLE, 0);
        }

        public function tables(): ?TablesContext
        {
            return $this->getTypedRuleContext(TablesContext::class, 0);
        }

        public function TEMPORARY(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::TEMPORARY, 0);
        }

        public function ifExists(): ?IfExistsContext
        {
            return $this->getTypedRuleContext(IfExistsContext::class, 0);
        }

        public function RESTRICT(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::RESTRICT, 0);
        }

        public function CASCADE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::CASCADE, 0);
        }

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterDropTable($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitDropTable($this);
            }
        }
    }
