<?php

namespace Hyperf\Seata\Core\Codec\Seata\Protocol;


use Hyperf\Seata\Core\Protocol\RegisterRMResponse;

class RegisterRMResponseCodec extends AbstractIdentifyResponseCodec
{
    public function getMessageClassType(): string
    {
        return RegisterRMResponse::class;
    }


}