<?php

namespace Hyperf\Seata\SqlParser\Antlr\MySql;

use Antlr\Antlr4\Runtime\CommonTokenStream;
use Hyperf\Seata\SqlParser\Antlr\MySql\Parser\MySqlLexer;
use Hyperf\Seata\SqlParser\Antlr\MySql\Parser\MySqlParser;
use Hyperf\Seata\SqlParser\Antlr\MySql\stream\ANTLRNoCaseStringStream;
use Hyperf\Seata\SqlParser\Antlr\MySql\Visit\InsertStatementSqlVisitor;
use Hyperf\Seata\SqlParser\Antlr\MySqlContext;
use Hyperf\Seata\SqlParser\Core\SQLInsertRecognizer;
use Hyperf\Seata\SqlParser\Core\SQLType;

class AntlrMySQLInsertRecognizer implements SQLInsertRecognizer
{
    public function __construct(string $sql)
    {
        $lexer = new MySqlLexer(new ANTLRNoCaseStringStream($sql));
        $tokenStream = new CommonTokenStream($lexer);
        $parser = new MySqlParser($tokenStream);
        $rootContext = $parser->root();
        $sqlContext = new MySqlContext();
        $sqlContext->setOriginalSQL($sql);
        $visitor = new InsertStatementSqlVisitor($sqlContext);
        $visitor->visit($rootContext);
    }

    public function insertColumnsIsEmpty(): bool
    {
        // TODO: Implement insertColumnsIsEmpty() method.
    }

    public function getInsertColumns(): array
    {
        // TODO: Implement getInsertColumns() method.
    }

    public function getInsertRows(array $primaryKeyIndex): array
    {
        // TODO: Implement getInsertRows() method.
    }

    public function getSQLType(): SQLType
    {
        // TODO: Implement getSQLType() method.
    }

    public function getTableAlias(): string
    {
        // TODO: Implement getTableAlias() method.
    }

    public function getTableName(): string
    {
        // TODO: Implement getTableName() method.
    }

    public function getOriginalSQL(): string
    {
        // TODO: Implement getOriginalSQL() method.
    }
}