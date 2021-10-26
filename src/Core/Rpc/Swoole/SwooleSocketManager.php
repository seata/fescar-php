<?php

namespace Hyperf\Seata\Core\Rpc\Swoole;


use Hyperf\Pool\SimplePool\PoolFactory;
use Hyperf\Seata\Core\Rpc\Address;
use Hyperf\Seata\Discovery\Registry\RegistryFactory;
use Hyperf\Seata\Logger\LoggerFactory;
use Hyperf\Seata\Logger\LoggerInterface;
use Swoole\Coroutine\Socket;
use Swow\Socket as SwowSocket;

class SwooleSocketManager
{
    protected RegistryFactory $registryFactory;
    protected LoggerInterface $logger;
    protected array $socketChannels = [];

    public function __construct(RegistryFactory $registryFactory, LoggerFactory $loggerFactory)
    {
        $this->registryFactory = $registryFactory;
        $this->logger = $loggerFactory->create(static::class);
    }

    public function acquireChannel(Address $address): SocketChannel
    {
        $serverAddress = (string) $address;
        if (! isset($this->socketChannels[$serverAddress])) {
            $socket = $this->createSocket($address);
            $socketChannel = new SocketChannel($socket, $address);
            $this->socketChannels[$serverAddress] = $socketChannel;
        }
        return $this->socketChannels[$serverAddress];
    }

    public function reconnect(string $transactionServiceGroup)
    {
        $availList = $this->getAvailServerList($transactionServiceGroup);
        if (empty($availList)) {
            $this->logger->error('No available server to connect');
            return;
        }
        foreach ($availList as $address) {
            try {
                $this->acquireChannel($address);
            } catch (\Throwable $exception) {
                $this->logger->error(sprintf('Cannot connect to %s cause: %s', (string)$address, $exception->getMessage()));
            }
        }
    }

    public function getAvailServerList(string $transactionServiceGroup): array
    {
        $availList = [];
        $availInetSocketAddressList = $this->registryFactory->getInstance()->lookup($transactionServiceGroup);
        if (! empty($availInetSocketAddressList)) {
            foreach ($availInetSocketAddressList as $address) {
                $availList[] = $address;
            }
        }
        return $availList;
    }

    protected function createSocket(Address $address): SwowSocket
    {
        // $socket = new Socket(AF_INET, SOCK_STREAM, 0);
        $socket = new SwowSocket();
        $socket->connect($address->getHost(), $address->getPort(), 100);
        return $socket;
    }
}