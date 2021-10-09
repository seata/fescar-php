<?php

namespace Hyperf\Seata\Core\Rpc;


class RpcContext
{

    /**
     * @var string
     */
    private $version;

    /**
     * @var string
     */
    private $applicationId;

    /**
     * @var string
     */
    private $transactionServiceGroup;

    /**
     * @var string
     */
    private $clientId;

    public function getVersion(): string
    {
        return $this->version;
    }

    /**
     * @return $this
     */
    public function setVersion(string $version)
    {
        $this->version = $version;
        return $this;
    }

    public function getApplicationId(): string
    {
        return $this->applicationId;
    }

    /**
     * @return $this
     */
    public function setApplicationId(string $applicationId)
    {
        $this->applicationId = $applicationId;
        return $this;
    }

    public function getTransactionServiceGroup(): string
    {
        return $this->transactionServiceGroup;
    }

    /**
     * @return $this
     */
    public function setTransactionServiceGroup(string $transactionServiceGroup)
    {
        $this->transactionServiceGroup = $transactionServiceGroup;
        return $this;
    }

    public function getClientId(): string
    {
        return $this->clientId;
    }

    /**
     * @return $this
     */
    public function setClientId(string $clientId)
    {
        $this->clientId = $clientId;
        return $this;
    }

}