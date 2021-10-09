<?php

namespace Hyperf\Seata\Core\Protocol;


class RegisterRMResponse extends AbstractIdentifyResponse
{

    public function getTypeCode(): int
    {
        return MessageType::TYPE_REG_RM_RESULT;
    }
}