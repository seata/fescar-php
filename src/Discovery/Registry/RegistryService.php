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

interface RegistryService
{
    /**
     * The constant PREFIX_SERVICE_MAPPING.
     */
    public const PREFIX_SERVICE_MAPPING = 'vgroup_mapping.';

    /**
     * The constant PREFIX_SERVICE_ROOT.
     */
    public const PREFIX_SERVICE_ROOT = 'service';

    /**
     * The constant CONFIG_SPLIT_CHAR.
     */
    public const CONFIG_SPLIT_CHAR = '.';

    /**
     * Register.
     *
     * @param $address the address
     * @throws Exception the exception
     */
    public function register(string $address): void;

    /**
     * Unregister.
     *
     * @param $address the address
     * @throws Exception the exception
     */
    public function unregister(string $address): void;

    /**
     * Subscribe.
     *
     * @param $cluster  the cluster
     * @param $listener the listener
     * @throws Exception the exception
     */
    public function subscribe(string $cluster, $listener): void;

    /**
     * Unsubscribe.
     *
     * @param cluster  the cluster
     * @param listener the listener
     * @param mixed $listener
     * @throws Exception the exception
     */
    public function unsubscribe(string $cluster, $listener): void;

    /**
     * Lookup list.
     *
     * @param key the key
     * @throws Exception the exception
     * @return \Hyperf\Seata\Core\Rpc\Address[]
     */
    public function lookup(string $key): array;

    /**
     * Close.
     *
     * @throws Exception
     */
    public function close(): void;
}
