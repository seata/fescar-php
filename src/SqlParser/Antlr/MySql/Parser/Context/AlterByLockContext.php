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

    class AlterByLockContext extends AlterSpecificationContext
    {
        /**
         * @var null|Token
         */
        public $lockType;

        public function __construct(AlterSpecificationContext $context)
        {
            parent::__construct($context);

            $this->copyFrom($context);
        }

        public function LOCK(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::LOCK, 0);
        }

        public function DEFAULT(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::DEFAULT, 0);
        }

        public function NONE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::NONE, 0);
        }

        public function SHARED(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::SHARED, 0);
        }

        public function EXCLUSIVE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::EXCLUSIVE, 0);
        }

        public function EQUAL_SYMBOL(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::EQUAL_SYMBOL, 0);
        }

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterAlterByLock($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitAlterByLock($this);
            }
        }
    }
