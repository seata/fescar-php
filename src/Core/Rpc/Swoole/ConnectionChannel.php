<?php

namespace seata\src\Core\Rpc\Swoole;


use Hyperf\Seata\Core\Rpc\Address;
use Swoole\Coroutine\Channel;

class ConnectionChannel
{

    protected Channel $sendChannel;
    protected Channel $sendResultChannel;
    protected Channel $recvChannel;

    public function __construct(
        Channel $sendChannel,
        Channel $sendResultChannel,
        Channel $recvChannel,
    ) {
        $this->sendChannel = $sendChannel;
        $this->sendResultChannel = $sendResultChannel;
        $this->recvChannel = $recvChannel;
    }

    public function sendSyncRequest(string $message)
    {
        $this->sendChannel->push($message);
        return $this->sendResultChannel->pop();
    }

    public function sendAsyncRequest(string $message)
    {
        $this->sendChannel->push($message);
    }

    public function recv()
    {
        return $this->recvChannel->pop();
    }

}