<?php

namespace Hyperf\Seata\Core\Rpc\Swoole;


use Hyperf\Contract\ConnectionInterface;
use Hyperf\Pool\Pool;
use Hyperf\Pool\SimplePool\PoolFactory;
use Hyperf\Seata\Core\Rpc\Address;
use Hyperf\Seata\Discovery\Registry\RegistryFactory;
use Hyperf\Seata\Logger\LoggerInterface;
use Hyperf\Utils\Str;
use JetBrains\PhpStorm\Pure;
use Swoole\Coroutine\Socket;

class SwooleClientConnectionManager
{

    protected PoolFactory $poolFactory;
    protected RegistryFactory $registryFactory;
    protected LoggerInterface $logger;
    protected string $poolPrefix = 'rpc-swoole-client-';
    protected array $addresses = [];

    public function __construct(PoolFactory $poolFactory, RegistryFactory $registryFactory, LoggerInterface $logger)
    {
        $this->poolFactory = $poolFactory;
        $this->registryFactory = $registryFactory;
        $this->logger = $logger;
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
                $this->acquireConnection($address);
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

    public function acquireConnection(Address $address): ConnectionInterface
    {
        $pool = $this->getConnectionPool($address);
        return $pool->get();
    }

    public function registerAddress(Address $address): static
    {
        $this->addresses[] = $this->getConnectionPool($address);
        return $this;
    }

    #[Pure]
    public function getAddresses(): array
    {
        return $this->addresses;
    }

    protected function getConnectionPool(Address $address): Pool
    {
        return $this->poolFactory->get($this->poolPrefix . (string) $address, function () use ($address) {
            $socket = new Socket(AF_INET, SOCK_STREAM, 0);
            $socket->connect($address->getHost(), $address->getPort(), 100);
            return $socket;
        });
    }

}