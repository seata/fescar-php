<?php

namespace Hyperf\Seata\SqlParser\Core;

interface ParametersHolder
{
    public function getParameters(): array;
}