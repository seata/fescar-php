<?php

namespace Hyperf\Seata\Rm\DataSource\Undo;


use Hyperf\Contract\ContainerInterface;
use Hyperf\Seata\Rm\DataSource\Undo\Mysql\MySQLUndoLogManager;

class UndoLogManagerFactory
{

    protected array $managers = [];

    public function __construct(ContainerInterface $container)
    {
        $this->managers = [
            'mysql' => $container->get(MySQLUndoLogManager::class),
        ];
    }

    public function getUndoLogManager(string $dbType): UndoLogManager
    {
        return $this->managers[$dbType];
    }

}