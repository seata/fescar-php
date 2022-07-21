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
namespace Hyperf\Seata\SqlParser\Antlr\MySql\Visit;

use Antlr\Antlr4\Runtime\Tree\TerminalNode;

class StatementSqlVisitor extends MySqlParserBaseVisitor
{
    private string $stringBuilder = '';

    public function visitTerminal(TerminalNode $node): string
    {
        $text = $node->getText();
        if ($text != null && trim($text) != '') {
            if ($this->shouldAddSpace(trim($text))) {
                $this->stringBuilder .= ' ';
            }
            $this->stringBuilder .= $text;
        }

        return $this->stringBuilder;
    }

    private function shouldAddSpace(string $text): bool
    {
        if (strlen($this->stringBuilder) == 0) {
            return false;
        }
        $lastChar = substr($this->stringBuilder, -1);

        switch ($lastChar) {
            case '.':
            case ',':
            case '(':
                return false;
            default:
                break;
        }

        $firstChar = substr($text, 1);
        switch ($firstChar) {
            case '.':
            case ',':
            case ')':
                return false;
            default:
                break;
        }

        return true;
    }
}
