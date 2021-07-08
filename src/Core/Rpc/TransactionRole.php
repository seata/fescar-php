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
namespace Hyperf\Seata\Core\Rpc;

class TransactionRole
{
    /**
     * tm.
     */
    public const TMROLE = 1;

    /**
     * rm.
     */
    public const RMROLE = 2;

    /**
     * server.
     */
    public const SERVERROLE = 3;
}
