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

    class PartitionOptionMinRowsContext extends PartitionOptionContext
    {
        /**
         * @var null|DecimalLiteralContext
         */
        public $minRows;

        public function __construct(PartitionOptionContext $context)
        {
            parent::__construct($context);

            $this->copyFrom($context);
        }

        public function MIN_ROWS(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::MIN_ROWS, 0);
        }

        public function decimalLiteral(): ?DecimalLiteralContext
        {
            return $this->getTypedRuleContext(DecimalLiteralContext::class, 0);
        }

        public function EQUAL_SYMBOL(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::EQUAL_SYMBOL, 0);
        }

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterPartitionOptionMinRows($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitPartitionOptionMinRows($this);
            }
        }
    }
