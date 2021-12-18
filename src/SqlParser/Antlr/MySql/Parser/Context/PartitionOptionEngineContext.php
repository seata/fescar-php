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

    class PartitionOptionEngineContext extends PartitionOptionContext
    {
        public function __construct(PartitionOptionContext $context)
        {
            parent::__construct($context);

            $this->copyFrom($context);
        }

        public function ENGINE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::ENGINE, 0);
        }

        public function engineName(): ?EngineNameContext
        {
            return $this->getTypedRuleContext(EngineNameContext::class, 0);
        }

        public function DEFAULT(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::DEFAULT, 0);
        }

        public function STORAGE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::STORAGE, 0);
        }

        public function EQUAL_SYMBOL(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::EQUAL_SYMBOL, 0);
        }

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterPartitionOptionEngine($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitPartitionOptionEngine($this);
            }
        }
    }
