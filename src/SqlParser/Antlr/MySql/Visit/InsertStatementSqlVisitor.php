<?php

namespace Hyperf\Seata\SqlParser\Antlr\MySql\Visit;

use Hyperf\Seata\SqlParser\Antlr\MySqlContext;

class InsertStatementSqlVisitor extends MySqlParserBaseVisitor
{
    private MySqlContext $sqlContext;

    public function __construct(MySqlContext $mySqlContext)
    {
        $this->sqlContext = $mySqlContext;
    }

    public function visitInsertStatement(Context\InsertStatementContext $context)
    {
        return (new InsertSpecificationSqlVisitor($this->sqlContext))->visitInsertStatement($context);
    }

}