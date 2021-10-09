<?php

namespace Hyperf\Seata\Core\Protocol;


class RegisterRMRequest extends AbstractIdentifyRequest
{

    private string $resourceIds = '';

    public function getTypeCode(): int
    {
        return MessageType::TYPE_REG_RM;
    }

    public function getResourceIds(): string
    {
        return $this->resourceIds;
    }

    public function setResourceIds(string $resourceIds): static
    {
        $this->resourceIds = $resourceIds;
        return $this;
    }
}