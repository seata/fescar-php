<?php

namespace Hyperf\Seata\Core\Rpc\Swoole;


use Hyperf\Pool\Pool;
use Hyperf\Utils\Coroutine;

class SwooleClientBootstrap
{

    protected SwooleClientConnectionManager $connectionManager;
    protected array $recvCoroutineMap = [];

    public function __construct(SwooleClientConnectionManager $connectionManager)
    {
        $this->connectionManager = $connectionManager;
    }

    public function start()
    {
        $this->runRecvCoroutine();
    }

    protected function runRecvCoroutine()
    {
        Coroutine::create(function () {
            while (true) {
                $pools = $this->connectionManager->getAddresses();
                foreach ($pools as $addressStr => $pool) {
                    if ($pool instanceof Pool && ! isset($this->recvCoroutineMap[$addressStr])) {
                        $coroutineId = Coroutine::create(function () use ($pool) {
                            $connection = $pool->get();
                            /** @var \Swoole\Coroutine\Socket $socket */
                            $socket = $connection->getConnection();
                            while (true) {
                                $content = $socket->recvAll();
                                if ($content) {
                                    var_dump($content);
                                }
                                if ($content === '') {
                                    continue;
                                }
                                if ($content === false) {
                                    break;
                                }
                                $fd = $socket->fd;
                                if (! isset($this->recvChannelMap[$fd])) {
                                    continue;
                                }
                                unset($this->recvChannelMap[$fd]);
                            }
                        });
                        $this->recvCoroutineMap[$addressStr] = $coroutineId;
                    }
                }
                sleep(1);
            }
        });
    }

}