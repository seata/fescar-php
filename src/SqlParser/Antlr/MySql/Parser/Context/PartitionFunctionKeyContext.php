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

    class PartitionFunctionKeyContext extends PartitionFunctionDefinitionContext
    {
        /**
         * @var null|Token
         */
        public $algType;

        public function __construct(PartitionFunctionDefinitionContext $context)
        {
            parent::__construct($context);

            $this->copyFrom($context);
        }

        public function KEY(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::KEY, 0);
        }

        public function LR_BRACKET(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::LR_BRACKET, 0);
        }

        public function uidList(): ?UidListContext
        {
            return $this->getTypedRuleContext(UidListContext::class, 0);
        }

        public function RR_BRACKET(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::RR_BRACKET, 0);
        }

        public function LINEAR(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::LINEAR, 0);
        }

        public function ALGORITHM(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::ALGORITHM, 0);
        }

        public function EQUAL_SYMBOL(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::EQUAL_SYMBOL, 0);
        }

        public function ONE_DECIMAL(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::ONE_DECIMAL, 0);
        }

        public function TWO_DECIMAL(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::TWO_DECIMAL, 0);
        }

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterPartitionFunctionKey($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitPartitionFunctionKey($this);
            }
        }
    }
