<?php

namespace Hyperf\Seata\Core\Codec\Seata\Protocol;


use Hyperf\Seata\Core\Protocol\RegisterTMResponse;

class RegisterTMResponseCodec extends AbstractIdentifyResponseCodec
{
    public function getMessageClassType(): string
    {
        return RegisterTMResponse::class;
    }


}