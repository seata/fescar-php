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

    class GtidsUntilOptionContext extends UntilOptionContext
    {
        /**
         * @var null|Token
         */
        public $gtids;

        public function __construct(UntilOptionContext $context)
        {
            parent::__construct($context);

            $this->copyFrom($context);
        }

        public function EQUAL_SYMBOL(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::EQUAL_SYMBOL, 0);
        }

        public function gtuidSet(): ?GtuidSetContext
        {
            return $this->getTypedRuleContext(GtuidSetContext::class, 0);
        }

        public function SQL_BEFORE_GTIDS(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::SQL_BEFORE_GTIDS, 0);
        }

        public function SQL_AFTER_GTIDS(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::SQL_AFTER_GTIDS, 0);
        }

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterGtidsUntilOption($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitGtidsUntilOption($this);
            }
        }
    }
