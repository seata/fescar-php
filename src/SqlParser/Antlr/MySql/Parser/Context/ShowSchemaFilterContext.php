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

    class ShowSchemaFilterContext extends ShowStatementContext
    {
        /**
         * @var null|Token
         */
        public $schemaFormat;

        public function __construct(ShowStatementContext $context)
        {
            parent::__construct($context);

            $this->copyFrom($context);
        }

        public function SHOW(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::SHOW, 0);
        }

        public function showSchemaEntity(): ?ShowSchemaEntityContext
        {
            return $this->getTypedRuleContext(ShowSchemaEntityContext::class, 0);
        }

        public function uid(): ?UidContext
        {
            return $this->getTypedRuleContext(UidContext::class, 0);
        }

        public function showFilter(): ?ShowFilterContext
        {
            return $this->getTypedRuleContext(ShowFilterContext::class, 0);
        }

        public function FROM(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::FROM, 0);
        }

        public function IN(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::IN, 0);
        }

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterShowSchemaFilter($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitShowSchemaFilter($this);
            }
        }
    }
