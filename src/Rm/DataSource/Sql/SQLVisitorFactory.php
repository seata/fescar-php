<?php

namespace Hyperf\Seata\Rm\DataSource\Sql;

use Hyperf\Seata\SqlParser\Core\SQLRecognizerFactory;

class SQLVisitorFactory
{
    protected SQLRecognizerFactory $SQL_RECOGNIZER_FACTORY;

    public static function get(string $sql, string $dbType = 'mysql')
    {
        return SQL_RECOGNIZER_FACTORY::create(sql, dbType);
    }
}