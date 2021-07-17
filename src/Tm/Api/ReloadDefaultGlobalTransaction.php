<?php


namespace Hyperf\Seata\Tm\Api;


use Hyperf\Seata\Exception\IllegalStateException;

class ReloadDefaultGlobalTransaction extends DefaultGlobalTransaction
{
    public function begin(?int $timeout = null, ?string $name = null)
    {
        throw new IllegalStateException('Never BEGIN on a RELOADED GlobalTransaction. ');
    }
}