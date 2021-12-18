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

    class LoadedTableIndexesContext extends ParserRuleContext
    {
        /**
         * @var null|Token
         */
        public $indexFormat;

        /**
         * @var null|UidListContext
         */
        public $partitionList;

        /**
         * @var null|UidListContext
         */
        public $indexList;

        public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
        {
            parent::__construct($parent, $invokingState);
        }

        public function getRuleIndex(): int
        {
            return MySqlParser::RULE_loadedTableIndexes;
        }

        public function tableName(): ?TableNameContext
        {
            return $this->getTypedRuleContext(TableNameContext::class, 0);
        }

        public function PARTITION(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::PARTITION, 0);
        }

        /**
         * @return null|array<TerminalNode>|TerminalNode
         */
        public function LR_BRACKET(?int $index = null)
        {
            if ($index === null) {
                return $this->getTokens(MySqlParser::LR_BRACKET);
            }

            return $this->getToken(MySqlParser::LR_BRACKET, $index);
        }

        /**
         * @return null|array<TerminalNode>|TerminalNode
         */
        public function RR_BRACKET(?int $index = null)
        {
            if ($index === null) {
                return $this->getTokens(MySqlParser::RR_BRACKET);
            }

            return $this->getToken(MySqlParser::RR_BRACKET, $index);
        }

        public function IGNORE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::IGNORE, 0);
        }

        public function LEAVES(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::LEAVES, 0);
        }

        /**
         * @return null|array<UidListContext>|UidListContext
         */
        public function uidList(?int $index = null)
        {
            if ($index === null) {
                return $this->getTypedRuleContexts(UidListContext::class);
            }

            return $this->getTypedRuleContext(UidListContext::class, $index);
        }

        public function ALL(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::ALL, 0);
        }

        public function INDEX(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::INDEX, 0);
        }

        public function KEY(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::KEY, 0);
        }

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterLoadedTableIndexes($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitLoadedTableIndexes($this);
            }
        }
    }
