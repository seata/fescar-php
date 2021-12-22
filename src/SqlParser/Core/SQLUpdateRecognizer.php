<?php

namespace Hyperf\Seata\SqlParser\Core;

interface SQLUpdateRecognizer extends WhereRecognizer
{
    public function getUpdateColumns(): array;

    public function getUpdateValues(): array;
}