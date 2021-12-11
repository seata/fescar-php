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
        // TODO： visitInsertStatement
    }
}