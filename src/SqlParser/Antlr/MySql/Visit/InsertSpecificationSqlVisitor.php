<?php

namespace Hyperf\Seata\SqlParser\Antlr\MySql\Visit;

use Hyperf\Seata\SqlParser\Antlr\MySqlContext;

class InsertSpecificationSqlVisitor extends MySqlParserBaseVisitor
{
    private MySqlContext $mySqlContext;

    public function __construct(MySqlContext $mySqlContext)
    {
        $this->mySqlContext = $mySqlContext;
    }

    public function visitInsertStatement(Context\InsertStatementContext $context)
    {
        $tableNameContext = $context->tableName();

        $this->mySqlContext->setTableName($tableNameContext->getText());

        $columns = $context->columns;

        $strings = implode(',', $columns);

        foreach ($strings as $insertColumnName) {
            $this->mySqlContext->addForInsertColumnName($insertColumnName);
        }

        $insertStatementValueContext = $context->insertStatementValue();

        $expressionsWithDefaultsContexts = $insertStatementValueContext->expressionsWithDefaults();

        foreach ($expressionsWithDefaultsContexts as $expressions) {
            $text = $expressions->getText();
            $str = null;

            if (strpos($text, "'") !== false) {
                $str = str_replace("'", '', $text);
            } elseif (strpos($text, '"') !== false) {
                $str = str_replace('"', '', $text);
            } else {
                $str = $text;
            }

            if (! empty($str) && strpos("'") === false &&  strpos('"') === false) {
                $this->mySqlContext->addForInsertValColumnName(explode(',', $str));
            }
        }
        $this->mySqlContext->setInsertRows(count($expressionsWithDefaultsContexts));
        return $this->mySqlContext;
    }
}