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

    class LoadIndexIntoCacheContext extends ParserRuleContext
    {
        public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
        {
            parent::__construct($parent, $invokingState);
        }

        public function getRuleIndex(): int
        {
            return MySqlParser::RULE_loadIndexIntoCache;
        }

        public function LOAD(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::LOAD, 0);
        }

        public function INDEX(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::INDEX, 0);
        }

        public function INTO(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::INTO, 0);
        }

        public function CACHE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::CACHE, 0);
        }

        /**
         * @return null|array<LoadedTableIndexesContext>|LoadedTableIndexesContext
         */
        public function loadedTableIndexes(?int $index = null)
        {
            if ($index === null) {
                return $this->getTypedRuleContexts(LoadedTableIndexesContext::class);
            }

            return $this->getTypedRuleContext(LoadedTableIndexesContext::class, $index);
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
                $listener->enterLoadIndexIntoCache($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitLoadIndexIntoCache($this);
            }
        }
    }
