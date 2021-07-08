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

use Hyperf\Seata\Core\Protocol\MessageType;

class GlobalBeginRequest extends AbstractTransactionRequestToTC
{
    /**
     * @var int
     */
    protected $timeout = 60000;

    /**
     * @var string
     */
    protected $transactionName;

    public function getTypeCode(): int
    {
        return MessageType::TYPE_GLOBAL_BEGIN;
    }

    public function getTimeout(): int
    {
        return $this->timeout;
    }

    /**
     * @return $this
     */
    public function setTimeout(int $timeout)
    {
        $this->timeout = $timeout;
        return $this;
    }

    public function getTransactionName(): string
    {
        return $this->transactionName;
    }

    /**
     * @return $this
     */
    public function setTransactionName(string $transactionName)
    {
        $this->transactionName = $transactionName;
        return $this;
    }
}
