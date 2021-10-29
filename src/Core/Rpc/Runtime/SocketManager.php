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
namespace Hyperf\Seata\Core\Rpc\Runtime;

use Hyperf\Seata\Core\Rpc\Address;
use Hyperf\Seata\Core\Rpc\Processor\RemotingProcessorInterface;
use Hyperf\Seata\Core\Rpc\Runtime\Swoole\SocketChannel as SwooleSocketChannel;
use Hyperf\Seata\Core\Rpc\Runtime\Swow\SocketChannel as SwowSocketChannel;
use Hyperf\Seata\Discovery\Registry\RegistryFactory;
use Hyperf\Seata\Exception\RuntimeException;
use Hyperf\Seata\Logger\LoggerFactory;
use Hyperf\Seata\Logger\LoggerInterface;
use Hyperf\Utils\Engine;
use Swoole\Coroutine\Socket as SwooleSocket;
use Swow\Socket as SwowSocket;

class SocketManager
{
    protected RegistryFactory $registryFactory;

    protected LoggerInterface $logger;

    protected array $socketChannels = [];

    protected array $processorTable = [];

    protected array $adapters = [
        Engine::ENGINE_SWOOLE => SwooleSocketChannel::class,
        Engine::ENGINE_SWOW => SwowSocketChannel::class,
    ];

    public function __construct(RegistryFactory $registryFactory, LoggerFactory $loggerFactory)
    {
        $this->registryFactory = $registryFactory;
        $this->logger = $loggerFactory->create(static::class);
    }

    public function acquireChannel(Address $address): SocketChannelInterface
    {
        $serverAddress = (string) $address;
        if (! isset($this->socketChannels[$serverAddress])) {
            $socketChannel = $this->createSocketChannel($this->createSocket($address), $address);
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
                $this->logger->error(sprintf('Cannot connect to %s cause: %s', (string) $address, $exception->getMessage()));
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

    protected function createSocket(Address $address): SwowSocket|SwooleSocket
    {
        if (Engine::isRunningInSwoole()) {
            $socket = new SwooleSocket(AF_INET, SOCK_STREAM, 0);
        } elseif (Engine::isRunningInSwow()) {
            $socket = new SwowSocket(SwowSocket::TYPE_TCP);
        } else {
            throw new RuntimeException('Invalid runtime engine');
        }
        $socket->connect($address->getHost(), $address->getPort(), 100);
        return $socket;
    }

    protected function createSocketChannel(SwooleSocket|SwowSocket $socket, Address $address): SocketChannelInterface
    {
        if (Engine::isRunningInSwoole()) {
            return new SwooleSocketChannel($socket, $address);
        }
        if (Engine::isRunningInSwow()) {
            return new SwowSocketChannel($socket, $address);
        }
        throw new RuntimeException('Invalid runtime engine');
    }
}
