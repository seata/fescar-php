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

    class IndexOptionContext extends ParserRuleContext
    {
        public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
        {
            parent::__construct($parent, $invokingState);
        }

        public function getRuleIndex(): int
        {
            return MySqlParser::RULE_indexOption;
        }

        public function KEY_BLOCK_SIZE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::KEY_BLOCK_SIZE, 0);
        }

        public function fileSizeLiteral(): ?FileSizeLiteralContext
        {
            return $this->getTypedRuleContext(FileSizeLiteralContext::class, 0);
        }

        public function EQUAL_SYMBOL(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::EQUAL_SYMBOL, 0);
        }

        public function indexType(): ?IndexTypeContext
        {
            return $this->getTypedRuleContext(IndexTypeContext::class, 0);
        }

        public function WITH(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::WITH, 0);
        }

        public function PARSER(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::PARSER, 0);
        }

        public function uid(): ?UidContext
        {
            return $this->getTypedRuleContext(UidContext::class, 0);
        }

        public function COMMENT(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::COMMENT, 0);
        }

        public function STRING_LITERAL(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::STRING_LITERAL, 0);
        }

        public function INVISIBLE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::INVISIBLE, 0);
        }

        public function VISIBLE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::VISIBLE, 0);
        }

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterIndexOption($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitIndexOption($this);
            }
        }
    }
