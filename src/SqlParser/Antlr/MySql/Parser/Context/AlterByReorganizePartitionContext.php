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

    use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
    use Antlr\Antlr4\Runtime\Tree\TerminalNode;
    use Hyperf\Seata\SqlParser\Antlr\MySql\Listener\MySqlParserListener;
    use Hyperf\Seata\SqlParser\Antlr\MySql\Parser\MySqlParser;

    class AlterByReorganizePartitionContext extends AlterSpecificationContext
    {
        public function __construct(AlterSpecificationContext $context)
        {
            parent::__construct($context);

            $this->copyFrom($context);
        }

        public function REORGANIZE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::REORGANIZE, 0);
        }

        public function PARTITION(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::PARTITION, 0);
        }

        public function uidList(): ?UidListContext
        {
            return $this->getTypedRuleContext(UidListContext::class, 0);
        }

        public function INTO(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::INTO, 0);
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
                $listener->enterAlterByReorganizePartition($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitAlterByReorganizePartition($this);
            }
        }
    }
