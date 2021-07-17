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
namespace Hyperf\Seata\Tm\Api;

use Hyperf\Seata\Exception\IllegalArgumentException;

class SuspendedResourcesHolder
{
    /**
     * The xid.
     */
    private $xid = '';

    public function __construct(string $xid)
    {
        if ($xid == null) {
            throw new IllegalArgumentException('xid must be not null');
        }
        $this->xid = $xid;
    }

    public function getXid(): string
    {
        return $this->xid;
    }

    public function setXid(string $xid): void
    {
        $this->xid = $xid;
    }
}
