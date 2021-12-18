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

    class SimpleFunctionCallContext extends SpecificFunctionContext
    {
        public function __construct(SpecificFunctionContext $context)
        {
            parent::__construct($context);

            $this->copyFrom($context);
        }

        public function CURRENT_DATE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::CURRENT_DATE, 0);
        }

        public function CURRENT_TIME(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::CURRENT_TIME, 0);
        }

        public function CURRENT_TIMESTAMP(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::CURRENT_TIMESTAMP, 0);
        }

        public function CURRENT_USER(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::CURRENT_USER, 0);
        }

        public function LOCALTIME(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::LOCALTIME, 0);
        }

        public function LR_BRACKET(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::LR_BRACKET, 0);
        }

        public function RR_BRACKET(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::RR_BRACKET, 0);
        }

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterSimpleFunctionCall($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitSimpleFunctionCall($this);
            }
        }
    }
