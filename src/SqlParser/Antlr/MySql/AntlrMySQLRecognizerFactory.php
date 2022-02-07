<?php

namespace Hyperf\Seata\SqlParser\Antlr\MySql;

use Antlr\Antlr4\Runtime\CommonTokenStream;
use Antlr\Antlr4\Runtime\InputStream;
use Hyperf\Seata\SqlParser\Antlr\MySql\Visit\StatementSqlVisitor;
use Hyperf\Seata\SqlParser\Antlr\SQLOperateRecognizerHolderFactory;
use Hyperf\Seata\SqlParser\Core\SQLRecognizerFactory;
use Hyperf\Seata\SqlParser\Antlr\MySql\Parser\MySqlLexer;
use Hyperf\Seata\SqlParser\Antlr\MySql\Parser\MySqlParser;

class AntlrMySQLRecognizerFactory implements SQLRecognizerFactory
{

    public function create(string $sqlData, string $dbType)
    {
        // TODO: 待看清楚这里的处理方式
        $lexer = new MySqlLexer(InputStream::fromString($sqlData));

        $tokenStream = new CommonTokenStream($lexer);

        $parser = new MySqlParser($tokenStream);

        $sqlStatementsContext = $parser->sqlStatements();

        $sqlStatementContexts = $sqlStatementsContext->sqlStatement();
//
        $recognizers = null;
        $recognizer = null;

//
        foreach ($sqlStatementContexts as $sql) {
            $visitor = new StatementSqlVisitor();

            $originalSQL = $visitor->visit($sql);
            dump('$originalSQL：' . $sqlData);
            dump('==========================');

            $recognizerHolder = SQLOperateRecognizerHolderFactory::getSQLRecognizerHolder(strtolower($dbType));

            if ($sql->dmlStatement()->updateStatement() != null) {
                $recognizer = $recognizerHolder->getUpdateRecognizer($sqlData);
            } elseif ($sql->dmlStatement()->insertStatement() != null) {
                $recognizer = $recognizerHolder->getInsertRecognizer($sqlData);
            } elseif ($sql->dmlStatement()->deleteStatement() != null) {
                $recognizer = $recognizerHolder->getDeleteRecognizer($sqlData);
            } elseif ($sql->dmlStatement()->selectStatement() != null) {
                $recognizer = $recognizerHolder->getSelectForUpdateRecognizer($sqlData);
            }

            if (! isset($recognizers)) {
                $recognizers = [];
            }

            if (isset($recognizers) && ! empty($recognizer)) {
                $recognizers[] = $recognizer;
            }
        }

        return $recognizers;
    }
}