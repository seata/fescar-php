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

    class LevelWeightRangeContext extends LevelsInWeightStringContext
    {
        /**
         * @var null|DecimalLiteralContext
         */
        public $firstLevel;

        /**
         * @var null|DecimalLiteralContext
         */
        public $lastLevel;

        public function __construct(LevelsInWeightStringContext $context)
        {
            parent::__construct($context);

            $this->copyFrom($context);
        }

        public function LEVEL(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::LEVEL, 0);
        }

        public function MINUS(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::MINUS, 0);
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
                $listener->enterLevelWeightRange($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitLevelWeightRange($this);
            }
        }
    }
