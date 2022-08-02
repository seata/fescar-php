<?php

declare(strict_types=1);
/**
 * Copyright 2019-2022 Seata.io Group.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 */
namespace Hyperf\Seata\Discovery\Registry;

use Hyperf\Contract\ConfigInterface;
use Hyperf\Seata\Core\Rpc\Address;
use InvalidArgumentException;

class FileRegistryService implements RegistryService
{
    private const POSTFIX_GROUPLIST = '.grouplist';

    private const ENDPOINT_SPLIT_CHAR = ';';

    private const IP_PORT_SPLIT_CHAR = ':';

    protected ConfigInterface $config;

    public function __construct(ConfigInterface $config)
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
        $file = 'seata.';
        $clusterName = $this->config->get($file . self::PREFIX_SERVICE_ROOT . self::CONFIG_SPLIT_CHAR . self::PREFIX_SERVICE_MAPPING . $key);
        if ($clusterName === null) {
            return [];
        }
        $endpointStr = $this->config->get($file . self::PREFIX_SERVICE_ROOT . self::CONFIG_SPLIT_CHAR . $clusterName . self::POSTFIX_GROUPLIST);
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
