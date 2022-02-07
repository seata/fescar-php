<?php

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