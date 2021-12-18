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

    class SetCharsetContext extends SetStatementContext
    {
        public function __construct(SetStatementContext $context)
        {
            parent::__construct($context);

            $this->copyFrom($context);
        }

        /**
         * @return null|array<TerminalNode>|TerminalNode
         */
        public function SET(?int $index = null)
        {
            if ($index === null) {
                return $this->getTokens(MySqlParser::SET);
            }

            return $this->getToken(MySqlParser::SET, $index);
        }

        public function CHARACTER(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::CHARACTER, 0);
        }

        public function CHARSET(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::CHARSET, 0);
        }

        public function charsetName(): ?CharsetNameContext
        {
            return $this->getTypedRuleContext(CharsetNameContext::class, 0);
        }

        public function DEFAULT(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::DEFAULT, 0);
        }

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterSetCharset($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitSetCharset($this);
            }
        }
    }
