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

    class LevelWeightListContext extends LevelsInWeightStringContext
    {
        public function __construct(LevelsInWeightStringContext $context)
        {
            parent::__construct($context);

            $this->copyFrom($context);
        }

        public function LEVEL(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::LEVEL, 0);
        }

        /**
         * @return null|array<LevelInWeightListElementContext>|LevelInWeightListElementContext
         */
        public function levelInWeightListElement(?int $index = null)
        {
            if ($index === null) {
                return $this->getTypedRuleContexts(LevelInWeightListElementContext::class);
            }

            return $this->getTypedRuleContext(LevelInWeightListElementContext::class, $index);
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

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterLevelWeightList($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitLevelWeightList($this);
            }
        }
    }
