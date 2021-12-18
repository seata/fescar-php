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

    class RelayLogUntilOptionContext extends UntilOptionContext
    {
        public function __construct(UntilOptionContext $context)
        {
            parent::__construct($context);

            $this->copyFrom($context);
        }

        public function RELAY_LOG_FILE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::RELAY_LOG_FILE, 0);
        }

        /**
         * @return null|array<TerminalNode>|TerminalNode
         */
        public function EQUAL_SYMBOL(?int $index = null)
        {
            if ($index === null) {
                return $this->getTokens(MySqlParser::EQUAL_SYMBOL);
            }

            return $this->getToken(MySqlParser::EQUAL_SYMBOL, $index);
        }

        public function STRING_LITERAL(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::STRING_LITERAL, 0);
        }

        public function COMMA(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::COMMA, 0);
        }

        public function RELAY_LOG_POS(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::RELAY_LOG_POS, 0);
        }

        public function decimalLiteral(): ?DecimalLiteralContext
        {
            return $this->getTypedRuleContext(DecimalLiteralContext::class, 0);
        }

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterRelayLogUntilOption($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitRelayLogUntilOption($this);
            }
        }
    }
