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
    use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
    use Antlr\Antlr4\Runtime\Tree\TerminalNode;
    use Hyperf\Seata\SqlParser\Antlr\MySql\Listener\MySqlParserListener;
    use Hyperf\Seata\SqlParser\Antlr\MySql\Parser\MySqlParser;

    class SimpleIdContext extends ParserRuleContext
    {
        public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
        {
            parent::__construct($parent, $invokingState);
        }

        public function getRuleIndex(): int
        {
            return MySqlParser::RULE_simpleId;
        }

        public function ID(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::ID, 0);
        }

        public function charsetNameBase(): ?CharsetNameBaseContext
        {
            return $this->getTypedRuleContext(CharsetNameBaseContext::class, 0);
        }

        public function transactionLevelBase(): ?TransactionLevelBaseContext
        {
            return $this->getTypedRuleContext(TransactionLevelBaseContext::class, 0);
        }

        public function engineName(): ?EngineNameContext
        {
            return $this->getTypedRuleContext(EngineNameContext::class, 0);
        }

        public function privilegesBase(): ?PrivilegesBaseContext
        {
            return $this->getTypedRuleContext(PrivilegesBaseContext::class, 0);
        }

        public function intervalTypeBase(): ?IntervalTypeBaseContext
        {
            return $this->getTypedRuleContext(IntervalTypeBaseContext::class, 0);
        }

        public function dataTypeBase(): ?DataTypeBaseContext
        {
            return $this->getTypedRuleContext(DataTypeBaseContext::class, 0);
        }

        public function keywordsCanBeId(): ?KeywordsCanBeIdContext
        {
            return $this->getTypedRuleContext(KeywordsCanBeIdContext::class, 0);
        }

        public function functionNameBase(): ?FunctionNameBaseContext
        {
            return $this->getTypedRuleContext(FunctionNameBaseContext::class, 0);
        }

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterSimpleId($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitSimpleId($this);
            }
        }
    }
