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

    class SetNamesContext extends SetStatementContext
    {
        public function __construct(SetStatementContext $context)
        {
            parent::__construct($context);

            $this->copyFrom($context);
        }

        public function SET(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::SET, 0);
        }

        public function NAMES(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::NAMES, 0);
        }

        public function charsetName(): ?CharsetNameContext
        {
            return $this->getTypedRuleContext(CharsetNameContext::class, 0);
        }

        public function DEFAULT(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::DEFAULT, 0);
        }

        public function COLLATE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::COLLATE, 0);
        }

        public function collationName(): ?CollationNameContext
        {
            return $this->getTypedRuleContext(CollationNameContext::class, 0);
        }

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterSetNames($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitSetNames($this);
            }
        }
    }
