<?php

namespace Hyperf\Seata\Core\Protocol\Transaction;


abstract class AbstractTransactionRequestToRM extends AbstractTransactionRequest
{

    /**
     * @var RMInboundHandler
     */
    protected $handler;

    /**
     * @return $this
     */
    public function setHandler(RMInboundHandler $handler)
    {
        $this->handler = $handler;
        return $this;
    }

    /**
     * Sets rm inbound message handler.
     *
     * @return $this
     */
    public function setRMInboundMessageHandler(RMInboundHandler $handler)
    {
        $this->handler = $handler;
    }
}
