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
    use Hyperf\Seata\SqlParser\Antlr\MySql\Listener\MySqlParserListener;

    class TableSourceBaseContext extends TableSourceContext
    {
        public function __construct(TableSourceContext $context)
        {
            parent::__construct($context);

            $this->copyFrom($context);
        }

        public function tableSourceItem(): ?TableSourceItemContext
        {
            return $this->getTypedRuleContext(TableSourceItemContext::class, 0);
        }

        /**
         * @return null|array<JoinPartContext>|JoinPartContext
         */
        public function joinPart(?int $index = null)
        {
            if ($index === null) {
                return $this->getTypedRuleContexts(JoinPartContext::class);
            }

            return $this->getTypedRuleContext(JoinPartContext::class, $index);
        }

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterTableSourceBase($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitTableSourceBase($this);
            }
        }
    }
