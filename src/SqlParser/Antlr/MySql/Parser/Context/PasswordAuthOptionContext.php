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

    class PasswordAuthOptionContext extends UserAuthOptionContext
    {
        /**
         * @var null|Token
         */
        public $hashed;

        public function __construct(UserAuthOptionContext $context)
        {
            parent::__construct($context);

            $this->copyFrom($context);
        }

        public function userName(): ?UserNameContext
        {
            return $this->getTypedRuleContext(UserNameContext::class, 0);
        }

        public function IDENTIFIED(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::IDENTIFIED, 0);
        }

        public function BY(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::BY, 0);
        }

        public function PASSWORD(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::PASSWORD, 0);
        }

        public function STRING_LITERAL(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::STRING_LITERAL, 0);
        }

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterPasswordAuthOption($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitPasswordAuthOption($this);
            }
        }
    }
