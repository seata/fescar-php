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

    class ShowProfileContext extends ShowStatementContext
    {
        /**
         * @var null|DecimalLiteralContext
         */
        public $queryCount;

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

        public function PROFILE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::PROFILE, 0);
        }

        /**
         * @return null|array<ShowProfileTypeContext>|ShowProfileTypeContext
         */
        public function showProfileType(?int $index = null)
        {
            if ($index === null) {
                return $this->getTypedRuleContexts(ShowProfileTypeContext::class);
            }

            return $this->getTypedRuleContext(ShowProfileTypeContext::class, $index);
        }

        public function LIMIT(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::LIMIT, 0);
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

        public function FOR(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::FOR, 0);
        }

        public function QUERY(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::QUERY, 0);
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

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterShowProfile($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitShowProfile($this);
            }
        }
    }
