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
    use Antlr\Antlr4\Runtime\Token;
    use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
    use Antlr\Antlr4\Runtime\Tree\TerminalNode;
    use Hyperf\Seata\SqlParser\Antlr\MySql\Listener\MySqlParserListener;
    use Hyperf\Seata\SqlParser\Antlr\MySql\Parser\MySqlParser;

    class CreateDatabaseContext extends ParserRuleContext
    {
        /**
         * @var null|Token
         */
        public $dbFormat;

        public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
        {
            parent::__construct($parent, $invokingState);
        }

        public function getRuleIndex(): int
        {
            return MySqlParser::RULE_createDatabase;
        }

        public function CREATE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::CREATE, 0);
        }

        public function uid(): ?UidContext
        {
            return $this->getTypedRuleContext(UidContext::class, 0);
        }

        public function DATABASE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::DATABASE, 0);
        }

        public function SCHEMA(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::SCHEMA, 0);
        }

        public function ifNotExists(): ?IfNotExistsContext
        {
            return $this->getTypedRuleContext(IfNotExistsContext::class, 0);
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
                $listener->enterCreateDatabase($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitCreateDatabase($this);
            }
        }
    }
