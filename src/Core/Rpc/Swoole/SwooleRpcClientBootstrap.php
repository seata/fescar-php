<?php

namespace Hyperf\Seata\Core\Rpc\Swoole;



use Hyperf\Seata\Core\Rpc\RpcClientBootstrapInterface;

class SwooleRpcClientBootstrap implements RpcClientBootstrapInterface
{
    /**
     * @var ClientHandler
     */
    protected $clientHandler;

    protected $channelHandlers;

    public function start()
    {
    }

    public function shutdown()
    {
        // TODO: Implement shutdown() method.
    }

    /**
     * @param ClientHandler $clientHandler
     */
    public function setClientHandler(ClientHandler $clientHandler): void
    {
        $this->clientHandler = $clientHandler;
    }


}