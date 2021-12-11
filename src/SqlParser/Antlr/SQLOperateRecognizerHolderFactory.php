<?php

namespace Hyperf\Seata\SqlParser\Antlr;


use Hyperf\Seata\SqlParser\Antlr\MySql\MySQLOperateRecognizerHolder;
use Hyperf\Utils\ApplicationContext;
use JetBrains\PhpStorm\Pure;

class SQLOperateRecognizerHolderFactory
{
    private array $RECOGNIZER_HOLDER_MAP = [];

    #[Pure] public static function getSQLRecognizerHolder(string $dbType)
    {
        // TODO 目前只有mysql
        return new MySQLOperateRecognizerHolder();
    }
}