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
namespace Hyperf\Seata\Core\Rpc\Processor;

use Hyperf\Seata\Logger\LoggerFactory;
use Hyperf\Seata\Logger\LoggerInterface;
use Hyperf\Utils\ApplicationContext;

abstract class AbstractRemotingProcessor implements RemotingProcessorInterface
{
    protected LoggerInterface $logger;

    protected function getLogger(): LoggerInterface
    {
        if (! $this->logger) {
            $this->logger = ApplicationContext::getContainer()->get(LoggerFactory::class)->create(static::class);
        }
        return $this->logger;
    }
}
