<?php

namespace Hyperf\Seata\Logger;


use Hyperf\Contract\ConfigInterface;

class LoggerFactory
{

    protected ConfigInterface $config;

    public function __construct(ConfigInterface $config)
    {
        $this->config = $config;
    }

    public function create(string $class): LoggerInterface
    {
        $logger = new StdoutLogger($this->config);
        $logger->setClass($class);
        return $logger;
    }

}