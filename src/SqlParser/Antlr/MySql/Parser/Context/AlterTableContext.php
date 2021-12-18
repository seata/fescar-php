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

    class AlterTableContext extends ParserRuleContext
    {
        /**
         * @var null|Token
         */
        public $intimeAction;

        public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
        {
            parent::__construct($parent, $invokingState);
        }

        public function getRuleIndex(): int
        {
            return MySqlParser::RULE_alterTable;
        }

        public function ALTER(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::ALTER, 0);
        }

        public function TABLE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::TABLE, 0);
        }

        public function tableName(): ?TableNameContext
        {
            return $this->getTypedRuleContext(TableNameContext::class, 0);
        }

        public function IGNORE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::IGNORE, 0);
        }

        /**
         * @return null|AlterSpecificationContext|array<AlterSpecificationContext>
         */
        public function alterSpecification(?int $index = null)
        {
            if ($index === null) {
                return $this->getTypedRuleContexts(AlterSpecificationContext::class);
            }

            return $this->getTypedRuleContext(AlterSpecificationContext::class, $index);
        }

        public function partitionDefinitions(): ?PartitionDefinitionsContext
        {
            return $this->getTypedRuleContext(PartitionDefinitionsContext::class, 0);
        }

        public function ONLINE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::ONLINE, 0);
        }

        public function OFFLINE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::OFFLINE, 0);
        }

        /**
         * @return null|array<TerminalNode>|TerminalNode
         */
        public function COMMA(?int $index = null)
        {
            if ($index === null) {
                return $this->getTokens(MySqlParser::COMMA);
            }

            return $this->getToken(MySqlParser::COMMA, $index);
        }

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterAlterTable($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitAlterTable($this);
            }
        }
    }
