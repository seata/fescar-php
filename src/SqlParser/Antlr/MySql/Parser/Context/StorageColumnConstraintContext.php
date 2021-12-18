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

    class StorageColumnConstraintContext extends ColumnConstraintContext
    {
        /**
         * @var null|Token
         */
        public $storageval;

        public function __construct(ColumnConstraintContext $context)
        {
            parent::__construct($context);

            $this->copyFrom($context);
        }

        public function STORAGE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::STORAGE, 0);
        }

        public function DISK(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::DISK, 0);
        }

        public function MEMORY(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::MEMORY, 0);
        }

        public function DEFAULT(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::DEFAULT, 0);
        }

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterStorageColumnConstraint($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitStorageColumnConstraint($this);
            }
        }
    }
