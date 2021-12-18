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

    class RoutineLanguageContext extends RoutineOptionContext
    {
        public function __construct(RoutineOptionContext $context)
        {
            parent::__construct($context);

            $this->copyFrom($context);
        }

        public function LANGUAGE(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::LANGUAGE, 0);
        }

        public function SQL(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::SQL, 0);
        }

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterRoutineLanguage($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitRoutineLanguage($this);
            }
        }
    }
