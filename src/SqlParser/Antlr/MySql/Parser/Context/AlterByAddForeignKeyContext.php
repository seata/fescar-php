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

    class AlterByAddForeignKeyContext extends AlterSpecificationContext
    {
        /**
         * @var null|UidContext
         */
        public $name;

        /**
         * @var null|UidContext
         */
        public $indexName;

        public function __construct(AlterSpecificationContext $context)
        {
            parent::__construct($context);

            $this->copyFrom($context);
        }

        public function ADD(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::ADD, 0);
        }

        public function FOREIGN(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::FOREIGN, 0);
        }

        public function KEY(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::KEY, 0);
        }

        public function indexColumnNames(): ?IndexColumnNamesContext
        {
            return $this->getTypedRuleContext(IndexColumnNamesContext::class, 0);
        }

        public function referenceDefinition(): ?ReferenceDefinitionContext
        {
            return $this->getTypedRuleContext(ReferenceDefinitionContext::class, 0);
        }

        public function CONSTRAINT(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::CONSTRAINT, 0);
        }

        /**
         * @return null|array<UidContext>|UidContext
         */
        public function uid(?int $index = null)
        {
            if ($index === null) {
                return $this->getTypedRuleContexts(UidContext::class);
            }

            return $this->getTypedRuleContext(UidContext::class, $index);
        }

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterAlterByAddForeignKey($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitAlterByAddForeignKey($this);
            }
        }
    }
