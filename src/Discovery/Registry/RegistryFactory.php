<?php

namespace Hyperf\Seata\Discovery\Registry;


use Psr\Container\ContainerInterface;

class RegistryFactory
{

    protected ContainerInterface $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function getInstance(): RegistryService
    {
        // 读取配置文件的 Registry Type 并返回对应的 RegistryService 对象
        return $this->container->get(FileRegistryService::class);
    }

}