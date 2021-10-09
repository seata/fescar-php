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
namespace Hyperf\Seata;


use Hyperf\Seata\Annotation\GlobalTransactionScanner;
use Hyperf\Seata\Annotation\GlobalTransactionScannerFactory;
use Hyperf\Seata\Core\Model\ResourceManager;
use Hyperf\Seata\Listener\InitListener;
use Hyperf\Seata\Rm\DefaultResourceManager;

class ConfigProvider
{
    public function __invoke(): array
    {
        return [
            'listeners' => [
                InitListener::class,
            ],
            'dependencies' => [
                ResourceManager::class => DefaultResourceManager::class,
                GlobalTransactionScanner::class => GlobalTransactionScannerFactory::class,
            ],
        ];
    }
}
