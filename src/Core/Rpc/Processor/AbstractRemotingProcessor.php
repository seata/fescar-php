<?php


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