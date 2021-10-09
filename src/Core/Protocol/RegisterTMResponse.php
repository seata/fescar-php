<?php

namespace Hyperf\Seata\Core\Protocol;


class RegisterTMResponse extends AbstractIdentifyResponse
{

    public function __construct(bool $result = true)
    {
        $this->setIdentified($result);
    }

    public function getTypeCode(): int
    {
        return MessageType::TYPE_REG_CLT_RESULT;
    }
}