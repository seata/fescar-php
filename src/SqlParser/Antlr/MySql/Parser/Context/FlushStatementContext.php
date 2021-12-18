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

    class FlushStatementContext extends ParserRuleContext
    {
        /**
         * @var null|Token
         */
        public $flushFormat;

        public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
        {
            parent::__construct($parent, $invokingState);
        }

        public function getRuleIndex(): int
        {
            return MySqlParser::RULE_flushStatement;
        }

        public function FLUSH(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::FLUSH, 0);
        }

        /**
         * @return null|array<FlushOptionContext>|FlushOptionContext
         */
        public function flushOption(?int $index = null)
        {
            if ($index === null) {
                return $this->getTypedRuleContexts(FlushOptionContext::class);
            }

            return $this->getTypedRuleContext(FlushOptionContext::class, $index);
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

        public function NO_WRITE_TO_BINLOG(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::NO_WRITE_TO_BINLOG, 0);
        }

        public function LOCAL(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::LOCAL, 0);
        }

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterFlushStatement($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitFlushStatement($this);
            }
        }
    }
