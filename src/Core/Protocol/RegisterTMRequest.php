<?php

namespace Hyperf\Seata\Core\Protocol;


class RegisterTMRequest extends AbstractIdentifyRequest
{

    public function getTypeCode(): int
    {
        return MessageType::TYPE_REG_CLT;
    }
}