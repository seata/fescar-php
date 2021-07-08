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
}
