<?php

namespace Hyperf\Seata\Core\Protocol;


class RegisterRMRequest extends AbstractIdentifyRequest
{

    /**
     * @var string
     */
    private $resourceIds = '';

    public function getTypeCode(): int
    {
        return MessageType::TYPE_REG_RM;
    }

    public function getResourceIds(): string
    {
        return $this->resourceIds;
    }

    /**
     * @param string $resourceIds
     * @return RegisterRMRequest
     */
    public function setResourceIds($resourceIds)
    {
        $this->resourceIds = $resourceIds;
        return $this;
    }
}