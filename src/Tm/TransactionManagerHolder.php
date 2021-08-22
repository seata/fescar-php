<?php


namespace Hyperf\Seata\Tm;


use Hyperf\Contract\StdoutLoggerInterface;
use Hyperf\Seata\Core\Model\TransactionManager;

class TransactionManagerHolder
{
    /**
     * @var StdoutLoggerInterface
     */
    protected $logger;

    /**
     * @var TransactionManager
     */
    private static $instance = null;

    public function __construct(StdoutLoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public static function get()
    {
        if (! empty(self::$instance)) {
            return self::$instance;
        }
        self::$instance = make(DefaultTransationManager::class);
        return self::$instance;
    }

}