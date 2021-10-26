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
