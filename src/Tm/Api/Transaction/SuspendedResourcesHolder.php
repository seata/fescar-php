<?php


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

    /**
     * @return string
     */
    public function getXid(): string
    {
        return $this->xid;
    }

}