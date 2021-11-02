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
    private static $instance;

    public function __construct(StdoutLoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public static function get()
    {
        if (! empty(self::$instance)) {
            return self::$instance;
        }
        self::$instance = make(DefaultTranslationManager::class);
        return self::$instance;
    }
}
