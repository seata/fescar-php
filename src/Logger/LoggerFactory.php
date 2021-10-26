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
