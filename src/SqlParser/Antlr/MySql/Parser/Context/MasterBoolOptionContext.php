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

    class MasterBoolOptionContext extends MasterOptionContext
    {
        /**
         * @var null|Token
         */
        public $boolVal;

        public function __construct(MasterOptionContext $context)
        {
            parent::__construct($context);

            $this->copyFrom($context);
        }

        public function boolMasterOption(): ?BoolMasterOptionContext
        {
            return $this->getTypedRuleContext(BoolMasterOptionContext::class, 0);
        }

        public function EQUAL_SYMBOL(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::EQUAL_SYMBOL, 0);
        }

        public function ZERO_DECIMAL(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::ZERO_DECIMAL, 0);
        }

        public function ONE_DECIMAL(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::ONE_DECIMAL, 0);
        }

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterMasterBoolOption($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitMasterBoolOption($this);
            }
        }
    }
