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

    class DefiniteFullTablePrivLevelContext extends PrivilegeLevelContext
    {
        public function __construct(PrivilegeLevelContext $context)
        {
            parent::__construct($context);

            $this->copyFrom($context);
        }

        /**
         * @return null|array<UidContext>|UidContext
         */
        public function uid(?int $index = null)
        {
            if ($index === null) {
                return $this->getTypedRuleContexts(UidContext::class);
            }

            return $this->getTypedRuleContext(UidContext::class, $index);
        }

        public function DOT(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::DOT, 0);
        }

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterDefiniteFullTablePrivLevel($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitDefiniteFullTablePrivLevel($this);
            }
        }
    }
