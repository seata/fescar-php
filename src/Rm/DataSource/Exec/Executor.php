<?php

namespace Hyperf\Seata\Rm\DataSource\Exec;


interface Executor
{

    public function execute(...$args);

}