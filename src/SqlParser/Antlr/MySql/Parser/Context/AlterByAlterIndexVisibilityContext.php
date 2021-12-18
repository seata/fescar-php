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

    class AlterByAlterIndexVisibilityContext extends AlterSpecificationContext
    {
        public function __construct(AlterSpecificationContext $context)
        {
            parent::__construct($context);

            $this->copyFrom($context);
        }

        public function ALTER(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::ALTER, 0);
        }

        public function INDEX(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::INDEX, 0);
        }

        public function uid(): ?UidContext
        {
            return $this->getTypedRuleContext(UidContext::class, 0);
        }

        public function VISIBLE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::VISIBLE, 0);
        }

        public function INVISIBLE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::INVISIBLE, 0);
        }

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterAlterByAlterIndexVisibility($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitAlterByAlterIndexVisibility($this);
            }
        }
    }
