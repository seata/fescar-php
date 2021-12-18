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

    class ShowCreateFullIdObjectContext extends ShowStatementContext
    {
        /**
         * @var null|Token
         */
        public $namedEntity;

        public function __construct(ShowStatementContext $context)
        {
            parent::__construct($context);

            $this->copyFrom($context);
        }

        public function SHOW(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::SHOW, 0);
        }

        public function CREATE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::CREATE, 0);
        }

        public function fullId(): ?FullIdContext
        {
            return $this->getTypedRuleContext(FullIdContext::class, 0);
        }

        public function EVENT(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::EVENT, 0);
        }

        public function FUNCTION(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::FUNCTION, 0);
        }

        public function PROCEDURE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::PROCEDURE, 0);
        }

        public function TABLE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::TABLE, 0);
        }

        public function TRIGGER(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::TRIGGER, 0);
        }

        public function VIEW(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::VIEW, 0);
        }

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterShowCreateFullIdObject($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitShowCreateFullIdObject($this);
            }
        }
    }
