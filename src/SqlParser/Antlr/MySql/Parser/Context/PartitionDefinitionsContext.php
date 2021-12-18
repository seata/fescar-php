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

    class PartitionDefinitionsContext extends ParserRuleContext
    {
        /**
         * @var null|DecimalLiteralContext
         */
        public $count;

        /**
         * @var null|DecimalLiteralContext
         */
        public $subCount;

        public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
        {
            parent::__construct($parent, $invokingState);
        }

        public function getRuleIndex(): int
        {
            return MySqlParser::RULE_partitionDefinitions;
        }

        public function PARTITION(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::PARTITION, 0);
        }

        /**
         * @return null|array<TerminalNode>|TerminalNode
         */
        public function BY(?int $index = null)
        {
            if ($index === null) {
                return $this->getTokens(MySqlParser::BY);
            }

            return $this->getToken(MySqlParser::BY, $index);
        }

        public function partitionFunctionDefinition(): ?PartitionFunctionDefinitionContext
        {
            return $this->getTypedRuleContext(PartitionFunctionDefinitionContext::class, 0);
        }

        public function PARTITIONS(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::PARTITIONS, 0);
        }

        public function SUBPARTITION(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::SUBPARTITION, 0);
        }

        public function subpartitionFunctionDefinition(): ?SubpartitionFunctionDefinitionContext
        {
            return $this->getTypedRuleContext(SubpartitionFunctionDefinitionContext::class, 0);
        }

        public function LR_BRACKET(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::LR_BRACKET, 0);
        }

        /**
         * @return null|array<PartitionDefinitionContext>|PartitionDefinitionContext
         */
        public function partitionDefinition(?int $index = null)
        {
            if ($index === null) {
                return $this->getTypedRuleContexts(PartitionDefinitionContext::class);
            }

            return $this->getTypedRuleContext(PartitionDefinitionContext::class, $index);
        }

        public function RR_BRACKET(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::RR_BRACKET, 0);
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

        public function SUBPARTITIONS(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::SUBPARTITIONS, 0);
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
                $listener->enterPartitionDefinitions($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitPartitionDefinitions($this);
            }
        }
    }
