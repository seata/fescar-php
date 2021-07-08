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
namespace Hyperf\Seata\Core\Context;

use Hyperf\Contract\StdoutLoggerInterface;
use Hyperf\Utils\ApplicationContext;
use Hyperf\Utils\Context;
use Psr\Log\LoggerInterface;
use RuntimeException;

class RootContext extends Context
{
    /**
     * The constant KEY_XID.
     */
    public const KEY_XID = 'TX_XID';

    public const KEY_GLOBAL_LOCK_FLAG = 'TX_LOCK';

    /**
     * @var \Psr\Log\LoggerInterface
     */
    private static $logger;

    public static function getXID(): string
    {
        return static::get(static::KEY_XID);
    }

    public static function bind(string $xid): void
    {
        static::debug('[Seata] Bind xid: ' . $xid);
        static::set(static::KEY_XID, $xid);
    }

    public static function unbind(): ?string
    {
        $xid = static::getXID();
        static::debug('[Seata] Unbind xid: ' . $xid);
        static::set(static::KEY_XID, null);
        return $xid;
    }

    public static function bindGlobalLockFlag(): void
    {
        static::debug('Local Transaction Global Lock support enabled');
        // Just put something not null
        statis::set(static::KEY_GLOBAL_LOCK_FLAG, static::KEY_GLOBAL_LOCK_FLAG);
    }

    public static function unbindGlobalLockFlag(): void
    {
        static::debug('Unbind global lock flag');
        statis::set(static::KEY_GLOBAL_LOCK_FLAG, null);
    }

    public static function inGlobalTransaction(): bool
    {
        return static::getXID() !== null;
    }

    public static function requireGlobalLock(): bool
    {
        return static::get(static::KEY_GLOBAL_LOCK_FLAG) !== null;
    }

    /**
     * Assert not in global transaction.
     */
    public static function assertNotInGlobalTransaction(): void
    {
        if (static::inGlobalTransaction()) {
            throw new RuntimeException('This action should never happen');
        }
    }

    private static function debug(...$content)
    {
        if (! static::$logger instanceof LoggerInterface && ApplicationContext::hasContainer()) {
            $container = ApplicationContext::getContainer();
            if ($container->has(StdoutLoggerInterface::class)) {
                static::$logger = $container->get(StdoutLoggerInterface::class);
            }
        }
        if (static::$logger instanceof LoggerInterface) {
            static::$logger->debug(sprintf(...$content));
        }
    }
}
