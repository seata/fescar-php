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

    class CharFunctionCallContext extends SpecificFunctionContext
    {
        public function __construct(SpecificFunctionContext $context)
        {
            parent::__construct($context);

            $this->copyFrom($context);
        }

        public function CHAR(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::CHAR, 0);
        }

        public function LR_BRACKET(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::LR_BRACKET, 0);
        }

        public function functionArgs(): ?FunctionArgsContext
        {
            return $this->getTypedRuleContext(FunctionArgsContext::class, 0);
        }

        public function RR_BRACKET(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::RR_BRACKET, 0);
        }

        public function USING(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::USING, 0);
        }

        public function charsetName(): ?CharsetNameContext
        {
            return $this->getTypedRuleContext(CharsetNameContext::class, 0);
        }

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterCharFunctionCall($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitCharFunctionCall($this);
            }
        }
    }
