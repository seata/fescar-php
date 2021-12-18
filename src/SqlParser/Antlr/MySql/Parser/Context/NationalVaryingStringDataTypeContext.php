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

    class NationalVaryingStringDataTypeContext extends DataTypeContext
    {
        /**
         * @var null|Token
         */
        public $typeName;

        public function __construct(DataTypeContext $context)
        {
            parent::__construct($context);

            $this->copyFrom($context);
        }

        public function NATIONAL(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::NATIONAL, 0);
        }

        public function VARYING(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::VARYING, 0);
        }

        public function CHAR(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::CHAR, 0);
        }

        public function CHARACTER(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::CHARACTER, 0);
        }

        public function lengthOneDimension(): ?LengthOneDimensionContext
        {
            return $this->getTypedRuleContext(LengthOneDimensionContext::class, 0);
        }

        public function BINARY(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::BINARY, 0);
        }

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterNationalVaryingStringDataType($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitNationalVaryingStringDataType($this);
            }
        }
    }
