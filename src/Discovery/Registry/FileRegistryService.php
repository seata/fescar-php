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
namespace Hyperf\Seata\Discovery\Registry;

use Hyperf\Seata\Core\Rpc\Address;
use InvalidArgumentException;

class FileRegistryService implements RegistryService
{
    private const POSTFIX_GROUPLIST = '.group_list';

    private const ENDPOINT_SPLIT_CHAR = ';';

    private const IP_PORT_SPLIT_CHAR = ':';

    /**
     * @var \Hyperf\Contract\ConfigInterface
     */
    protected $config;

    public function __construct(\Hyperf\Contract\ConfigInterface $config)
    {
        $this->config = $config;
    }

    public function register(string $address): void
    {
    }

    public function unregister(string $address): void
    {
    }

    public function subscribe(string $cluster, $listener): void
    {
    }

    public function unsubscribe(string $cluster, $listener): void
    {
    }

    public function lookup(string $key): array
    {
//        return [new Address('127.0.0.1', 8091)];
        $clusterName = $this->config->get('seata.' . self::PREFIX_SERVICE_ROOT . self::CONFIG_SPLIT_CHAR . self::PREFIX_SERVICE_MAPPING . $key);
        if ($clusterName === null) {
            return [];
        }
        $endpointStr = $this->config->get('seata.' . self::PREFIX_SERVICE_ROOT . self::CONFIG_SPLIT_CHAR . $clusterName . self::POSTFIX_GROUPLIST);
        if (! $endpointStr) {
            throw new InvalidArgumentException($clusterName . self::POSTFIX_GROUPLIST . ' is required');
        }
        $endpoints = explode(self::ENDPOINT_SPLIT_CHAR, $endpointStr);
        $inetSocketAddresses = [];
        foreach ($endpoints as $endpoint) {
            $ipAndPort = explode(self::IP_PORT_SPLIT_CHAR, $endpoint);
            if (count($ipAndPort) !== 2) {
                throw new InvalidArgumentException('endpoint format should like ip:port');
            }
            $inetSocketAddresses[] = new Address($ipAndPort[0], (int) $ipAndPort[1]);
        }
        return $inetSocketAddresses;
    }

    public function close(): void
    {
    }
}
