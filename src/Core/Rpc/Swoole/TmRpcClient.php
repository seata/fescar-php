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
namespace Hyperf\Seata\Core\Rpc\Swoole;

use Hyperf\Seata\Core\Protocol\RegisterTMRequest;
use Hyperf\Seata\Core\Rpc\TransactionRole;

class TmRpcClient extends AbstractRpcRemotingClient
{
    protected const KEEP_ALIVE_TIME = PHP_INT_MAX;

    protected const MAX_QUEUE_SIZE = 20000;

    protected $applicationId = '';

    protected $transactionServiceGroup = '';

    protected $accessKey = null;

    protected $secretKey = null;

    public function __construct($transactionRole = TransactionRole::TMROLE)
    {
        parent::__construct($transactionRole);
    }

    public function destroy(): void
    {
        // TODO: Implement destroy() method.
    }

    public function init()
    {
        parent::init();

        $this->initRegisterProcessor();
    }

    /**
     * @return \Hyperf\Seata\Core\Protocol\Transaction\GlobalBeginResponse
     */
    private function initRegisterProcessor()
    {
        // @todo registerProcessor
        $request = new RegisterTMRequest($this->applicationId, $this->transactionServiceGroup);
        $this->setAccessKey($this->accessKey);
        $this->setSecretKey($this->secretKey);
        return $this->sendMsgWithResponse($request);
    }

    public function getApplicationId(): string
    {
        return $this->applicationId;
    }

    public function setApplicationId(string $applicationId): void
    {
        $this->applicationId = $applicationId;
    }

    public function getAccessKey(): ?string
    {
        return $this->accessKey;
    }

    public function setAccessKey(?string $accessKey): void
    {
        $this->accessKey = $accessKey;
    }

    public function getSecretKey(): ?string
    {
        return $this->secretKey;
    }

    public function setSecretKey(?string $secretKey): void
    {
        $this->secretKey = $secretKey;
    }

    /**
     * @param string $transactionServiceGroup
     */
    public function setTransactionServiceGroup(string $transactionServiceGroup): void
    {
        $this->transactionServiceGroup = $transactionServiceGroup;
    }

    protected function getTransactionServiceGroup(): string
    {
        return $this->transactionServiceGroup;
    }
}
