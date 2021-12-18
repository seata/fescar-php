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

    class CollectionDataTypeContext extends DataTypeContext
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

        public function collectionOptions(): ?CollectionOptionsContext
        {
            return $this->getTypedRuleContext(CollectionOptionsContext::class, 0);
        }

        public function ENUM(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::ENUM, 0);
        }

        /**
         * @return null|array<TerminalNode>|TerminalNode
         */
        public function SET(?int $index = null)
        {
            if ($index === null) {
                return $this->getTokens(MySqlParser::SET);
            }

            return $this->getToken(MySqlParser::SET, $index);
        }

        public function BINARY(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::BINARY, 0);
        }

        public function charsetName(): ?CharsetNameContext
        {
            return $this->getTypedRuleContext(CharsetNameContext::class, 0);
        }

        public function CHARACTER(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::CHARACTER, 0);
        }

        public function CHARSET(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::CHARSET, 0);
        }

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterCollectionDataType($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitCollectionDataType($this);
            }
        }
    }
