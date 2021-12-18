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

    use Antlr\Antlr4\Runtime\Token;
    use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
    use Antlr\Antlr4\Runtime\Tree\TerminalNode;
    use Hyperf\Seata\SqlParser\Antlr\MySql\Listener\MySqlParserListener;
    use Hyperf\Seata\SqlParser\Antlr\MySql\Parser\MySqlParser;

    class SimpleIndexDeclarationContext extends IndexColumnDefinitionContext
    {
        /**
         * @var null|Token
         */
        public $indexFormat;

        public function __construct(IndexColumnDefinitionContext $context)
        {
            parent::__construct($context);

            $this->copyFrom($context);
        }

        public function indexColumnNames(): ?IndexColumnNamesContext
        {
            return $this->getTypedRuleContext(IndexColumnNamesContext::class, 0);
        }

        public function INDEX(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::INDEX, 0);
        }

        public function KEY(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::KEY, 0);
        }

        public function uid(): ?UidContext
        {
            return $this->getTypedRuleContext(UidContext::class, 0);
        }

        public function indexType(): ?IndexTypeContext
        {
            return $this->getTypedRuleContext(IndexTypeContext::class, 0);
        }

        /**
         * @return null|array<IndexOptionContext>|IndexOptionContext
         */
        public function indexOption(?int $index = null)
        {
            if ($index === null) {
                return $this->getTypedRuleContexts(IndexOptionContext::class);
            }

            return $this->getTypedRuleContext(IndexOptionContext::class, $index);
        }

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterSimpleIndexDeclaration($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitSimpleIndexDeclaration($this);
            }
        }
    }
