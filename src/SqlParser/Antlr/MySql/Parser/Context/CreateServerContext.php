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

    class CreateServerContext extends ParserRuleContext
    {
        /**
         * @var null|Token
         */
        public $wrapperName;

        public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
        {
            parent::__construct($parent, $invokingState);
        }

        public function getRuleIndex(): int
        {
            return MySqlParser::RULE_createServer;
        }

        public function CREATE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::CREATE, 0);
        }

        public function SERVER(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::SERVER, 0);
        }

        public function uid(): ?UidContext
        {
            return $this->getTypedRuleContext(UidContext::class, 0);
        }

        public function FOREIGN(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::FOREIGN, 0);
        }

        public function DATA(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::DATA, 0);
        }

        public function WRAPPER(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::WRAPPER, 0);
        }

        public function OPTIONS(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::OPTIONS, 0);
        }

        public function LR_BRACKET(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::LR_BRACKET, 0);
        }

        /**
         * @return null|array<ServerOptionContext>|ServerOptionContext
         */
        public function serverOption(?int $index = null)
        {
            if ($index === null) {
                return $this->getTypedRuleContexts(ServerOptionContext::class);
            }

            return $this->getTypedRuleContext(ServerOptionContext::class, $index);
        }

        public function RR_BRACKET(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::RR_BRACKET, 0);
        }

        public function MYSQL(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::MYSQL, 0);
        }

        public function STRING_LITERAL(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::STRING_LITERAL, 0);
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
                $listener->enterCreateServer($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitCreateServer($this);
            }
        }
    }
