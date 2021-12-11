<?php

namespace Hyperf\Seata\Rm\DataSource\Sql;

use Hyperf\Seata\SqlParser\Core\SQLRecognizerFactory;
use Hyperf\Utils\ApplicationContext;

class SQLVisitorFactory
{
    protected SQLRecognizerFactory $SQL_RECOGNIZER_FACTORY;

    public static function get(string $sql, string $dbType = 'mysql')
    {
        $container = ApplicationContext::getContainer();
        $SQL_RECOGNIZER_FACTORY = $container->get(SQLRecognizerFactory::class);
        return $SQL_RECOGNIZER_FACTORY->create($sql, $dbType);
    }
}