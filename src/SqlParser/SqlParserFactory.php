<?php

namespace Hyperf\Seata\SqlParser;

use Hyperf\Seata\SqlParser\Parser\MySqlParser;

class SqlParserFactory
{
    public static function parser(string $query, string $dbType = 'MySql')
    {
        if ($dbType == 'MySql') {
            return new MySqlParser($query);
        }

        // TODO throwable unsupported
    }
}