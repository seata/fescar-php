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

    class ShowErrorsContext extends ShowStatementContext
    {
        /**
         * @var null|Token
         */
        public $errorFormat;

        /**
         * @var null|DecimalLiteralContext
         */
        public $offset;

        /**
         * @var null|DecimalLiteralContext
         */
        public $rowCount;

        public function __construct(ShowStatementContext $context)
        {
            parent::__construct($context);

            $this->copyFrom($context);
        }

        public function SHOW(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::SHOW, 0);
        }

        public function ERRORS(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::ERRORS, 0);
        }

        public function WARNINGS(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::WARNINGS, 0);
        }

        public function LIMIT(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::LIMIT, 0);
        }

        /**
         * @return null|array<DecimalLiteralContext>|DecimalLiteralContext
         */
        public function decimalLiteral(?int $index = null)
        {
            if ($index === null) {
                return $this->getTypedRuleContexts(DecimalLiteralContext::class);
            }

            return $this->getTypedRuleContext(DecimalLiteralContext::class, $index);
        }

        public function COMMA(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::COMMA, 0);
        }

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterShowErrors($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitShowErrors($this);
            }
        }
    }
