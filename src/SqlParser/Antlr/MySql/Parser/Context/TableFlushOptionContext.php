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

    class TableFlushOptionContext extends FlushOptionContext
    {
        public function __construct(FlushOptionContext $context)
        {
            parent::__construct($context);

            $this->copyFrom($context);
        }

        public function TABLES(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::TABLES, 0);
        }

        public function tableNames(): ?TableNamesContext
        {
            return $this->getTypedRuleContext(TableNamesContext::class, 0);
        }

        public function flushTableOption(): ?FlushTableOptionContext
        {
            return $this->getTypedRuleContext(FlushTableOptionContext::class, 0);
        }

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterTableFlushOption($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitTableFlushOption($this);
            }
        }
    }
