<?php

namespace Hyperf\Seata\Core\Rpc\Swoole;


use Hyperf\Contract\ConnectionInterface;
use Hyperf\Pool\Pool;
use Hyperf\Pool\SimplePool\Connection;
use Hyperf\Pool\SimplePool\PoolFactory;
use Hyperf\Seata\Core\Rpc\Address;
use Swoole\Coroutine\Socket;

class SwooleClientPoolManager
{

    /**
     * @var \Hyperf\Pool\SimplePool\PoolFactory
     */
    protected $poolFactory;

    public function __construct(PoolFactory $poolFactory)
    {
        $this->poolFactory = $poolFactory;
    }

    public function acquireConnection(Address $address): ConnectionInterface
    {
        $pool = $this->getConnectionPool($address);
        return $pool->get();
    }

    protected function getConnectionPool(Address $address): Pool
    {
        $prefix = 'rpc-swoole-client-';
        return $this->poolFactory->get($prefix . (string) $address, function () use ($address) {
            $socket = new Socket(AF_INET, SOCK_STREAM, 0);
            $socket->connect($address->getHost(), $address->getPort(), 100);
            return $socket;
        });
    }

}