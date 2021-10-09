<?php

namespace Hyperf\Seata\Core\Protocol;


abstract class AbstractIdentifyRequest extends AbstractMessage
{

    /**
     * The Version.
     */
    protected $version = Version::CURRENT;

    /**
     * The Application id.
     * @var string
     */
    protected $applicationId;

    /**
     * The Transaction service group.
     * @var string
     */
    protected $transactionServiceGroup;

    /**
     * The Extra data.
     */
    protected $extraData;

    public function __construct(string $applicationId, string $transactionServiceGroup, ?string $extraData = null)
    {
        $this->applicationId = $applicationId;
        $this->transactionServiceGroup = $transactionServiceGroup;
        $this->extraData = $extraData;
    }

    public function getApplicationId(): string
    {
        return $this->applicationId;
    }

    /**
     * @param string $applicationId
     * @return AbstractIdentifyRequest
     */
    public function setApplicationId($applicationId)
    {
        $this->applicationId = $applicationId;
        return $this;
    }

    public function getTransactionServiceGroup(): string
    {
        return $this->transactionServiceGroup;
    }

    /**
     * @param string $transactionServiceGroup
     * @return AbstractIdentifyRequest
     */
    public function setTransactionServiceGroup($transactionServiceGroup)
    {
        $this->transactionServiceGroup = $transactionServiceGroup;
        return $this;
    }

    public function getExtraData(): ?string
    {
        return $this->extraData;
    }

    /**
     * @param string|null $extraData
     * @return AbstractIdentifyRequest
     */
    public function setExtraData($extraData)
    {
        $this->extraData = $extraData;
        return $this;
    }

    public function getVersion(): string
    {
        return $this->version;
    }

    /**
     * @param string $version
     * @return AbstractIdentifyRequest
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

}