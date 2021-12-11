<?php

namespace Hyperf\Seata\SqlParser\Antlr\MySql\Visit;


use Antlr\Antlr4\Runtime\Tree\TerminalNode;

class StatementSqlVisitor extends MySqlParserBaseVisitor
{

    public function visitTerminal(TerminalNode $node): string
    {
        $stringBuilder = '';
        $text = $node->getText();

        if (! empty($text)) {
            if ($this->shouldAddSpace(trim($text))) {
                $stringBuilder .= ' ';
            }
            $stringBuilder .= $text;
        }

        return $stringBuilder;
    }

    private function shouldAddSpace(string $text): bool
    {
        if (strlen($text) > 0) {
            return false;
        }
        $lastChar = substr($text, -1);

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