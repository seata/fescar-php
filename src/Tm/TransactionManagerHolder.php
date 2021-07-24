<?php


namespace Hyperf\Seata\Tm;


use Hyperf\Contract\StdoutLoggerInterface;

class TransactionManagerHolder
{
    /**
     * @var StdoutLoggerInterface
     */
    protected $logger;

    public function __construct(StdoutLoggerInterface $logger)
    {
        $this->logger = $logger;
    }

}