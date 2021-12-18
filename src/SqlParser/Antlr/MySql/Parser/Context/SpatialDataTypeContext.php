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

    class SpatialDataTypeContext extends DataTypeContext
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

        public function GEOMETRYCOLLECTION(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::GEOMETRYCOLLECTION, 0);
        }

        public function GEOMCOLLECTION(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::GEOMCOLLECTION, 0);
        }

        public function LINESTRING(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::LINESTRING, 0);
        }

        public function MULTILINESTRING(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::MULTILINESTRING, 0);
        }

        public function MULTIPOINT(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::MULTIPOINT, 0);
        }

        public function MULTIPOLYGON(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::MULTIPOLYGON, 0);
        }

        public function POINT(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::POINT, 0);
        }

        public function POLYGON(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::POLYGON, 0);
        }

        public function JSON(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::JSON, 0);
        }

        public function GEOMETRY(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::GEOMETRY, 0);
        }

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterSpatialDataType($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitSpatialDataType($this);
            }
        }
    }
