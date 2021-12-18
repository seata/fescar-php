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
    use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
    use Antlr\Antlr4\Runtime\Tree\TerminalNode;
    use Hyperf\Seata\SqlParser\Antlr\MySql\Listener\MySqlParserListener;
    use Hyperf\Seata\SqlParser\Antlr\MySql\Parser\MySqlParser;

    class ReferenceActionContext extends ParserRuleContext
    {
        /**
         * @var null|ReferenceControlTypeContext
         */
        public $onDelete;

        /**
         * @var null|ReferenceControlTypeContext
         */
        public $onUpdate;

        public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
        {
            parent::__construct($parent, $invokingState);
        }

        public function getRuleIndex(): int
        {
            return MySqlParser::RULE_referenceAction;
        }

        /**
         * @return null|array<TerminalNode>|TerminalNode
         */
        public function ON(?int $index = null)
        {
            if ($index === null) {
                return $this->getTokens(MySqlParser::ON);
            }

            return $this->getToken(MySqlParser::ON, $index);
        }

        public function DELETE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::DELETE, 0);
        }

        /**
         * @return null|array<ReferenceControlTypeContext>|ReferenceControlTypeContext
         */
        public function referenceControlType(?int $index = null)
        {
            if ($index === null) {
                return $this->getTypedRuleContexts(ReferenceControlTypeContext::class);
            }

            return $this->getTypedRuleContext(ReferenceControlTypeContext::class, $index);
        }

        public function UPDATE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::UPDATE, 0);
        }

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterReferenceAction($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitReferenceAction($this);
            }
        }
    }
