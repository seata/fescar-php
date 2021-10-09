<?php


namespace Hyperf\Seata\Discovery\Registry;

interface RegistryService
{

    /**
     * The constant PREFIX_SERVICE_MAPPING.
     */
    const PREFIX_SERVICE_MAPPING = "vgroup_mapping.";
    /**
     * The constant PREFIX_SERVICE_ROOT.
     */
    const PREFIX_SERVICE_ROOT = "service";
    /**
     * The constant CONFIG_SPLIT_CHAR.
     */
    const CONFIG_SPLIT_CHAR = ".";

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
     * @throws Exception the exception
     */
    public function unsubscribe(string $cluster, $listener): void;

    /**
     * Lookup list.
     *
     * @param key the key
     * @return \Hyperf\Seata\Core\Rpc\Address[]
     * @throws Exception the exception
     */
    public function lookup(string $key): array;

    /**
     * Close.
     *
     * @throws Exception
     */
    public function close(): void;
}