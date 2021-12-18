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

    class AlterSimpleDatabaseContext extends AlterDatabaseContext
    {
        /**
         * @var null|Token
         */
        public $dbFormat;

        public function __construct(AlterDatabaseContext $context)
        {
            parent::__construct($context);

            $this->copyFrom($context);
        }

        public function ALTER(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::ALTER, 0);
        }

        public function DATABASE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::DATABASE, 0);
        }

        public function SCHEMA(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::SCHEMA, 0);
        }

        public function uid(): ?UidContext
        {
            return $this->getTypedRuleContext(UidContext::class, 0);
        }

        /**
         * @return null|array<CreateDatabaseOptionContext>|CreateDatabaseOptionContext
         */
        public function createDatabaseOption(?int $index = null)
        {
            if ($index === null) {
                return $this->getTypedRuleContexts(CreateDatabaseOptionContext::class);
            }

            return $this->getTypedRuleContext(CreateDatabaseOptionContext::class, $index);
        }

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterAlterSimpleDatabase($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitAlterSimpleDatabase($this);
            }
        }
    }
