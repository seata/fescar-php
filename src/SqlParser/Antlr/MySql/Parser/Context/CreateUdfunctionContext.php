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

    class CreateUdfunctionContext extends ParserRuleContext
    {
        /**
         * @var null|Token
         */
        public $returnType;

        public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
        {
            parent::__construct($parent, $invokingState);
        }

        public function getRuleIndex(): int
        {
            return MySqlParser::RULE_createUdfunction;
        }

        public function CREATE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::CREATE, 0);
        }

        public function FUNCTION(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::FUNCTION, 0);
        }

        public function uid(): ?UidContext
        {
            return $this->getTypedRuleContext(UidContext::class, 0);
        }

        public function RETURNS(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::RETURNS, 0);
        }

        public function SONAME(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::SONAME, 0);
        }

        public function STRING_LITERAL(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::STRING_LITERAL, 0);
        }

        public function STRING(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::STRING, 0);
        }

        public function INTEGER(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::INTEGER, 0);
        }

        public function REAL(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::REAL, 0);
        }

        public function DECIMAL(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::DECIMAL, 0);
        }

        public function AGGREGATE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::AGGREGATE, 0);
        }

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterCreateUdfunction($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitCreateUdfunction($this);
            }
        }
    }
