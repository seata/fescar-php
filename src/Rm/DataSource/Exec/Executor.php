<?php

namespace Hyperf\Seata\Rm\DataSource\Exec;


use Hyperf\Seata\Rm\DataSource\Sql\Struct\TableRecords;

interface Executor
{
    public function execute(?array $params = null);

    public function beforeImage();

    public function prepareUndoLog(?TableRecords $beforeImages = null, ?TableRecords $afterImages = null);

    public function afterImage(): ?TableRecords;
}