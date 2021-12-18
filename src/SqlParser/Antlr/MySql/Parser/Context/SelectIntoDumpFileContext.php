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

    class SelectIntoDumpFileContext extends SelectIntoExpressionContext
    {
        public function __construct(SelectIntoExpressionContext $context)
        {
            parent::__construct($context);

            $this->copyFrom($context);
        }

        public function INTO(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::INTO, 0);
        }

        public function DUMPFILE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::DUMPFILE, 0);
        }

        public function STRING_LITERAL(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::STRING_LITERAL, 0);
        }

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterSelectIntoDumpFile($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitSelectIntoDumpFile($this);
            }
        }
    }
