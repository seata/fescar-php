<?php

namespace Hyperf\Seata\Core\Rpc;

interface RpcClientBootstrapInterface
{
    /**
     * Start.
     */
    public function start();

    /**
     * Shutdown.
     */
    public function shutdown();
}