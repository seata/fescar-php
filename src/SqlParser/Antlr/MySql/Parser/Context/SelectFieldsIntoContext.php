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

    class SelectFieldsIntoContext extends ParserRuleContext
    {
        /**
         * @var null|Token
         */
        public $terminationField;

        /**
         * @var null|Token
         */
        public $enclosion;

        /**
         * @var null|Token
         */
        public $escaping;

        public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
        {
            parent::__construct($parent, $invokingState);
        }

        public function getRuleIndex(): int
        {
            return MySqlParser::RULE_selectFieldsInto;
        }

        public function TERMINATED(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::TERMINATED, 0);
        }

        public function BY(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::BY, 0);
        }

        public function STRING_LITERAL(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::STRING_LITERAL, 0);
        }

        public function ENCLOSED(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::ENCLOSED, 0);
        }

        public function OPTIONALLY(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::OPTIONALLY, 0);
        }

        public function ESCAPED(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::ESCAPED, 0);
        }

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterSelectFieldsInto($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitSelectFieldsInto($this);
            }
        }
    }
