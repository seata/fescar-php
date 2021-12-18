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

    class NaturalJoinContext extends JoinPartContext
    {
        public function __construct(JoinPartContext $context)
        {
            parent::__construct($context);

            $this->copyFrom($context);
        }

        public function NATURAL(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::NATURAL, 0);
        }

        public function JOIN(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::JOIN, 0);
        }

        public function tableSourceItem(): ?TableSourceItemContext
        {
            return $this->getTypedRuleContext(TableSourceItemContext::class, 0);
        }

        public function LEFT(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::LEFT, 0);
        }

        public function RIGHT(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::RIGHT, 0);
        }

        public function OUTER(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::OUTER, 0);
        }

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterNaturalJoin($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitNaturalJoin($this);
            }
        }
    }
