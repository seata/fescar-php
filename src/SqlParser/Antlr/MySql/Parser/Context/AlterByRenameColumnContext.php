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

    class AlterByRenameColumnContext extends AlterSpecificationContext
    {
        /**
         * @var null|UidContext
         */
        public $oldColumn;

        /**
         * @var null|UidContext
         */
        public $newColumn;

        public function __construct(AlterSpecificationContext $context)
        {
            parent::__construct($context);

            $this->copyFrom($context);
        }

        public function RENAME(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::RENAME, 0);
        }

        public function COLUMN(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::COLUMN, 0);
        }

        public function TO(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::TO, 0);
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

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterAlterByRenameColumn($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitAlterByRenameColumn($this);
            }
        }
    }
