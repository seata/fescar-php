<?php

declare(strict_types=1);
/**
 * Copyright 1999-2022 Seata.io Group.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 */
namespace Hyperf\Seata\SqlParser\Antlr\MySql\Parser\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use Antlr\Antlr4\Runtime\Tree\TerminalNode;
use Hyperf\Seata\SqlParser\Antlr\MySql\Listener\MySqlParserListener;
use Hyperf\Seata\SqlParser\Antlr\MySql\Parser\MySqlParser;

class CharsetNameBaseContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_charsetNameBase;
    }

    public function ARMSCII8(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ARMSCII8, 0);
    }

    public function ASCII(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ASCII, 0);
    }

    public function BIG5(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::BIG5, 0);
    }

    public function BINARY(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::BINARY, 0);
    }

    public function CP1250(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::CP1250, 0);
    }

    public function CP1251(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::CP1251, 0);
    }

    public function CP1256(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::CP1256, 0);
    }

    public function CP1257(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::CP1257, 0);
    }

    public function CP850(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::CP850, 0);
    }

    public function CP852(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::CP852, 0);
    }

    public function CP866(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::CP866, 0);
    }

    public function CP932(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::CP932, 0);
    }

    public function DEC8(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::DEC8, 0);
    }

    public function EUCJPMS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::EUCJPMS, 0);
    }

    public function EUCKR(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::EUCKR, 0);
    }

    public function GB18030(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::GB18030, 0);
    }

    public function GB2312(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::GB2312, 0);
    }

    public function GBK(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::GBK, 0);
    }

    public function GEOSTD8(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::GEOSTD8, 0);
    }

    public function GREEK(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::GREEK, 0);
    }

    public function HEBREW(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::HEBREW, 0);
    }

    public function HP8(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::HP8, 0);
    }

    public function KEYBCS2(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::KEYBCS2, 0);
    }

    public function KOI8R(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::KOI8R, 0);
    }

    public function KOI8U(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::KOI8U, 0);
    }

    public function LATIN1(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LATIN1, 0);
    }

    public function LATIN2(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LATIN2, 0);
    }

    public function LATIN5(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LATIN5, 0);
    }

    public function LATIN7(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LATIN7, 0);
    }

    public function MACCE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::MACCE, 0);
    }

    public function MACROMAN(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::MACROMAN, 0);
    }

    public function SJIS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SJIS, 0);
    }

    public function SWE7(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SWE7, 0);
    }

    public function TIS620(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::TIS620, 0);
    }

    public function UCS2(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::UCS2, 0);
    }

    public function UJIS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::UJIS, 0);
    }

    public function UTF16(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::UTF16, 0);
    }

    public function UTF16LE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::UTF16LE, 0);
    }

    public function UTF32(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::UTF32, 0);
    }

    public function UTF8(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::UTF8, 0);
    }

    public function UTF8MB3(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::UTF8MB3, 0);
    }

    public function UTF8MB4(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::UTF8MB4, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterCharsetNameBase($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitCharsetNameBase($this);
        }
    }
}
