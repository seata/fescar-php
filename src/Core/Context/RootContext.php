<?php

declare(strict_types=1);
/**
 * Copyright 2019-2022 Seata.io Group.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 */
namespace Hyperf\Seata\Core\Context;

use Hyperf\Seata\Core\Model\BranchType;
use Hyperf\Seata\Exception\IllegalArgumentException;
use Hyperf\Seata\Logger\LoggerFactory;
use Hyperf\Seata\Logger\LoggerInterface;
use Hyperf\Utils\ApplicationContext;
use Hyperf\Utils\Context;
use RuntimeException;

class RootContext extends Context
{
    /**
     * The constant KEY_XID.
     */
    public const KEY_XID = 'TX_XID';

    public const MDC_KEY_XID = 'X-TX-XID';

    public const MDC_KEY_BRANCH_ID = 'X-TX-BRANCH-ID';

    public const KEY_BRANCH_TYPE = 'TX_BRANCH_TYPE';

    public const KEY_GLOBAL_LOCK_FLAG = 'TX_LOCK';

    public const VALUE_GLOBAL_LOCK_FLAG = true;

    protected static int $defaultBranchType;

    protected static ?LoggerInterface $logger = null;

    public static function setDefaultBranchType(int $branchType): void
    {
        if ($branchType !== BranchType::AT && $branchType !== BranchType::XA) {
            throw new IllegalArgumentException(sprintf('The default branch type must be BranchType::AT(%d) or BranchType::XA(%d), the value of the argument is %d', BranchType::AT, BranchType::XA, $branchType));
        }
        if (static::$defaultBranchType != null && static::$defaultBranchType != $branchType) {
            static::log('warning', sprintf('The %s::$defaultBranchType has been set repeatedly. The value changes from %d to %d', RootContext::class, static::$defaultBranchType, $branchType));
        }
        static::$defaultBranchType = $branchType;
    }

    public static function getXID(): ?string
    {
        return static::get(static::KEY_XID);
    }

    public static function bind(string $xid): void
    {
        if (! $xid) {
            static::log('debug', 'xid is blank, switch to unbind operation!');
            self::unbind();
        } else {
            static::log('debug', 'Bind xid: ' . $xid);
            static::set(static::KEY_XID, $xid);
        }

    }

    /**
     * Unbind xid.
     */
    public static function unbind(): ?string
    {
        $xid = static::getXID();
        static::log('debug', 'Unbind xid: ' . $xid);
        static::set(static::KEY_XID, null);
        return $xid;
    }

    public static function bindGlobalLockFlag(): void
    {
        static::log('debug', 'Local Transaction Global Lock support enabled');
        // Just put something not null
        static::set(static::KEY_GLOBAL_LOCK_FLAG, static::KEY_GLOBAL_LOCK_FLAG);
    }

    public static function unbindGlobalLockFlag(): void
    {
        static::log('debug', 'Unbind global lock flag');
        static::set(static::KEY_GLOBAL_LOCK_FLAG, null);
    }

    /**
     * In global transaction boolean.
     */
    public static function inGlobalTransaction(): bool
    {
        return static::getXID() !== null;
    }

    /**
     * In tcc branch boolean.
     */
    public static function inTccBranch(): bool
    {
        return static::getBranchType() === BranchType::TCC;
    }


    /**
     * In saga branch boolean.
     */
    public static function inSagaBranch(): bool
    {
        return static::getBranchType() === BranchType::SAGA;
    }

    /**
     * get the branch type
     */
    public static function getBranchType(): ?int
    {
        $branchType = null;
        if (static::inGlobalTransaction()) {
            $branchType = static::get(static::KEY_BRANCH_TYPE, static::$defaultBranchType ?? BranchType::AT);
        }
        return $branchType;
    }

    /**
     * bind branch type
     */
    public static function bindBranchType(int $branchType)
    {
        if (empty($branchType)) {
            throw new IllegalArgumentException('branchType must be not null');
        }

        static::log('debug', 'Bind branch type %d', $branchType);
        static::set(static::KEY_BRANCH_TYPE, $branchType);
    }

    /**
     * unbind branch type
     */
    public static function unbindBranchType(): null|int
    {
        $prevBranchType = static::get(static::KEY_BRANCH_TYPE, null);
        static::log('debug', 'Bind branch type %s', $prevBranchType ? (string) $prevBranchType : 'Null');
        static::set(static::KEY_BRANCH_TYPE, null);
        return $prevBranchType;
    }

    /**
     * requires global lock check
     */
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

    /**
     * entry map
     */
    public static function entries(): array
    {
       return Context::getContainer();
    }

    private static function log($level = 'debug', ...$content)
    {
        if (! static::$logger instanceof LoggerInterface && ApplicationContext::hasContainer()) {
            $container = ApplicationContext::getContainer();
            static::$logger = $container->get(LoggerFactory::class)->create(RootContext::class);
        }
        if (static::$logger instanceof LoggerInterface) {
            static::$logger->log($level, sprintf(...$content));
        }
    }
}
