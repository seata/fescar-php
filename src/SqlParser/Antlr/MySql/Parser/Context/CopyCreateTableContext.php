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

    class CopyCreateTableContext extends CreateTableContext
    {
        /**
         * @var null|TableNameContext
         */
        public $parenthesisTable;

        public function __construct(CreateTableContext $context)
        {
            parent::__construct($context);

            $this->copyFrom($context);
        }

        public function CREATE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::CREATE, 0);
        }

        public function TABLE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::TABLE, 0);
        }

        /**
         * @return null|array<TableNameContext>|TableNameContext
         */
        public function tableName(?int $index = null)
        {
            if ($index === null) {
                return $this->getTypedRuleContexts(TableNameContext::class);
            }

            return $this->getTypedRuleContext(TableNameContext::class, $index);
        }

        public function LIKE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::LIKE, 0);
        }

        public function LR_BRACKET(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::LR_BRACKET, 0);
        }

        public function RR_BRACKET(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::RR_BRACKET, 0);
        }

        public function TEMPORARY(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::TEMPORARY, 0);
        }

        public function ifNotExists(): ?IfNotExistsContext
        {
            return $this->getTypedRuleContext(IfNotExistsContext::class, 0);
        }

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterCopyCreateTable($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitCopyCreateTable($this);
            }
        }
    }
