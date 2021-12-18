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

    class RoutineDataContext extends RoutineOptionContext
    {
        public function __construct(RoutineOptionContext $context)
        {
            parent::__construct($context);

            $this->copyFrom($context);
        }

        public function CONTAINS(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::CONTAINS, 0);
        }

        public function SQL(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::SQL, 0);
        }

        public function NO(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::NO, 0);
        }

        public function READS(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::READS, 0);
        }

        public function DATA(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::DATA, 0);
        }

        public function MODIFIES(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::MODIFIES, 0);
        }

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterRoutineData($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitRoutineData($this);
            }
        }
    }
