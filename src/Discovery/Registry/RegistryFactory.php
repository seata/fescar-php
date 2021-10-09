<?php

namespace Hyperf\Seata\Discovery\Registry;


class RegistryFactory
{

    /**
     * @var \Psr\Container\ContainerInterface
     */
    protected $container;

    public function __construct(\Psr\Container\ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function getInstance(): RegistryService
    {
        // 读取配置文件的 Registry Type 并返回对应的 RegistryService 对象
        return $this->container->get(FileRegistryService::class);
    }

}