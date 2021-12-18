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

    class CommitWorkContext extends ParserRuleContext
    {
        /**
         * @var null|Token
         */
        public $nochain;

        /**
         * @var null|Token
         */
        public $norelease;

        public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
        {
            parent::__construct($parent, $invokingState);
        }

        public function getRuleIndex(): int
        {
            return MySqlParser::RULE_commitWork;
        }

        public function COMMIT(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::COMMIT, 0);
        }

        public function WORK(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::WORK, 0);
        }

        public function AND(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::AND, 0);
        }

        public function CHAIN(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::CHAIN, 0);
        }

        public function RELEASE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::RELEASE, 0);
        }

        /**
         * @return null|array<TerminalNode>|TerminalNode
         */
        public function NO(?int $index = null)
        {
            if ($index === null) {
                return $this->getTokens(MySqlParser::NO);
            }

            return $this->getToken(MySqlParser::NO, $index);
        }

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterCommitWork($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitCommitWork($this);
            }
        }
    }
