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

    class ChannelFlushOptionContext extends FlushOptionContext
    {
        public function __construct(FlushOptionContext $context)
        {
            parent::__construct($context);

            $this->copyFrom($context);
        }

        public function RELAY(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::RELAY, 0);
        }

        public function LOGS(): ?TerminalNode
        {
            return $this->getToken(MySqlParser::LOGS, 0);
        }

        public function channelOption(): ?ChannelOptionContext
        {
            return $this->getTypedRuleContext(ChannelOptionContext::class, 0);
        }

        public function enterRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->enterChannelFlushOption($this);
            }
        }

        public function exitRule(ParseTreeListener $listener): void
        {
            if ($listener instanceof MySqlParserListener) {
                $listener->exitChannelFlushOption($this);
            }
        }
    }
