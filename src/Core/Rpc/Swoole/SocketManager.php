<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
namespace Hyperf\Seata\Core\Rpc\Swoole;

use Hyperf\Seata\Core\Rpc\Address;
use Hyperf\Utils\ChannelPool;
use Hyperf\Utils\Coroutine;
use RuntimeException;
use Swoole\Coroutine\Socket;

class SocketManager
{
    protected const WAIT_CLOSE = 2;

    protected const WAIT_CLOSE_FORCE = 3;

    /**
     * @var array
     */
    protected static $channels = [];

    /**
     * @var \Hyperf\Utils\ChannelPool
     */
    protected $channelPool;

    /**
     * @var \Swoole\Coroutine\Channel
     */
    protected $sendChannel;

    /**
     * @var \Swoole\Coroutine\Channel
     */
    protected $sendResultChannel;

    protected $mainCoroutineId = 0;

    protected $recvCoroutineId = 0;

    protected $sendCoroutineId = 0;

    /**
     * @var \Hyperf\Seata\Core\Rpc\Address
     */
    protected $address;

    /**
     * @var Socket
     */
    protected $socket;

    protected $recvChannelMap = [];

    protected $waitStatus = false;

    protected $sendYield = false;

    public function __construct(ChannelPool $channelPool)
    {
        $this->channelPool = $channelPool;
    }

    public function start(Address $address): bool
    {
        if ($this->recvCoroutineId !== 0 || $this->sendCoroutineId !== 0) {
            throw new RuntimeException('Cannot restart the client.');
        }
        if (! Coroutine::inCoroutine()) {
            throw new RuntimeException('Client have to run in coroutine');
        }
        $this->address = $address;
        $this->mainCoroutineId = Coroutine::id();
        $this->runRecvCoroutine();
        $this->runSendCoroutine();
    }

    public function acquireChannel(Address $address)
    {
        if (! $this->socket) {
            $socket = new Socket(AF_INET, SOCK_STREAM, 0);
            $socket->connect($address->getHost(), $address->getPort(), 100);
            // $socket->listen(128);
            $this->socket = $socket;
        }
        return $this->socket;
    }

    protected function runSendCoroutine()
    {
        if (! $this->sendYield) {
            return;
        }
        Coroutine::create(function () {
            $this->sendCoroutineId = Coroutine::id();
            $this->sendChannel = $this->channelPool->get();
            $this->sendResultChannel = $this->channelPool->get();
            while (true) {
                $data = $this->sendChannel->pop();
                if (! $data) {
                    break;
                }
                $result = $this->getSocket()->sendAll($data);
                $this->sendResultChannel->push($result);
            }
            $this->sendCoroutineId = 0;
        });
    }

    protected function getSocket(): Socket
    {
        if (! $this->socket) {
            $address = $this->address;
            $socket = new Socket(AF_INET, SOCK_STREAM, 0);
            $socket->connect($address->getHost(), $address->getPort(), 100);
            // $socket->listen(128);
            $this->socket = $socket;
        }
        return $this->socket;
    }

    protected function isFdExist(int $fd): bool
    {
        return isset($this->recvChannelMap[$fd]);
    }

    protected function runRecvCoroutine(string $address)
    {
        Coroutine::create(function () {
            $this->recvCoroutineId = Coroutine::id();
            $socket = $this->getSocket();
            while (true) {
                $content = $socket->recvAll();
                if ($content === false) {
                    var_dump('Recv false');
                    break;
                }
                if (empty($content)) {
                    continue;
                }
                $fd = $socket->fd;
                if (! $this->isFdExist($fd)) {
                    continue;
                }
                if ($this->waitStatus === self::WAIT_CLOSE_FORCE) {
                    $this->closeRecv();
                    break;
                }
                $channel = $this->recvChannelMap[$fd];
                $channel->push($content);
                unset($this->recvChannelMap[$fd]);
                $this->channelPool->push($channel);
                if ($this->waitStatus === self::WAIT_CLOSE && empty($this->recvChannelMap)) {
                    break;
                }
            }
        });
    }

    protected function closeRecv()
    {
        if ($this->waitStatus) {
            $shouldKill = true;
        } else {
            $shouldKill = ! $this->getSocket()->checkLiveness();
        }
        if ($shouldKill) {
            $this->getSocket()->close();
        }
        if (! empty($this->recvChannelMap)) {
            foreach ($this->recvChannelMap as $channel) {
                while ($channel->stats()['consumer_num'] !== 0) {
                    $channel->push(false);
                }
                $this->channelPool->release($channel);
            }
            $this->recvChannelMap = [];
        }
        return $shouldKill;
    }
}
