<?php

namespace Hyperf\Seata\Core\Protocol\Transaction;


abstract class AbstractGlobalEndRequest extends AbstractTransactionRequestToTC
{

    /**
     * @var string
     */
    protected $xid;

    /**
     * @var string
     */
    protected $extraData;

    public function getXid(): string
    {
        return $this->xid;
    }

    /**
     * @return $this
     */
    public function setXid(string $xid)
    {
        $this->xid = $xid;
        return $this;
    }

    public function getExtraData(): string
    {
        return $this->extraData;
    }

    /**
     * @return $this
     */
    public function setExtraData(string $extraData)
    {
        $this->extraData = $extraData;
        return $this;
    }

}