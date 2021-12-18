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

    class ShowEngineContext extends ShowStatementContext
    {
        /**
         * @var null|Token
         */
        public $engineOption;

        public function __construct(ShowStatementContext $context)
        {
            parent::__construct($context);

            $this->copyFrom($context);
        }

        public function SHOW(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::SHOW, 0);
        }

        public function ENGINE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::ENGINE, 0);
        }

        public function engineName(): ?EngineNameContext
        {
            return $this->getTypedRuleContext(EngineNameContext::class, 0);
        }

        public function STATUS(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::STATUS, 0);
        }

        public function MUTEX(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::MUTEX, 0);
        }

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterShowEngine($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitShowEngine($this);
            }
        }
    }
