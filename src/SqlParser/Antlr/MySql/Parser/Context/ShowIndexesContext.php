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

    class ShowIndexesContext extends ShowStatementContext
    {
        /**
         * @var null|Token
         */
        public $indexFormat;

        /**
         * @var null|Token
         */
        public $tableFormat;

        /**
         * @var null|Token
         */
        public $schemaFormat;

        public function __construct(ShowStatementContext $context)
        {
            parent::__construct($context);

            $this->copyFrom($context);
        }

        public function SHOW(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::SHOW, 0);
        }

        public function tableName(): ?TableNameContext
        {
            return $this->getTypedRuleContext(TableNameContext::class, 0);
        }

        public function INDEX(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::INDEX, 0);
        }

        public function INDEXES(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::INDEXES, 0);
        }

        public function KEYS(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::KEYS, 0);
        }

        /**
         * @return null|array<TerminalNode>|TerminalNode
         */
        public function FROM(?int $index = null)
        {
            if ($index === null) {
                return $this->getTokens(MySqlParser::FROM);
            }

            return $this->getToken(MySqlParser::FROM, $index);
        }

        /**
         * @return null|array<TerminalNode>|TerminalNode
         */
        public function IN(?int $index = null)
        {
            if ($index === null) {
                return $this->getTokens(MySqlParser::IN);
            }

            return $this->getToken(MySqlParser::IN, $index);
        }

        public function uid(): ?UidContext
        {
            return $this->getTypedRuleContext(UidContext::class, 0);
        }

        public function WHERE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::WHERE, 0);
        }

        public function expression(): ?ExpressionContext
        {
            return $this->getTypedRuleContext(ExpressionContext::class, 0);
        }

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterShowIndexes($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitShowIndexes($this);
            }
        }
    }
