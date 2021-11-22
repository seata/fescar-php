<?php

namespace Hyperf\Seata\SqlParser\Core;

interface SQLRecognizerFactory
{
    public function create(string $sql, string $dbType);
}