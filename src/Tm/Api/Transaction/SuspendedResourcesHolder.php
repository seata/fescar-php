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
namespace Hyperf\Seata\Tm\Api\Transaction;

class SuspendedResourcesHolder
{
    /**
     * @var string The xid
     */
    private $xid;

    public function __construct(string $xid)
    {
        $this->xid = $xid;
    }

    public function getXid(): string
    {
        return $this->xid;
    }
}
