<?php

namespace Hyperf\Seata\Core\Codec\Seata\Protocol;


use Hyperf\Seata\Core\Protocol\RegisterTMRequest;

class RegisterTMRequestCodec extends AbstractIdentifyRequestCodec
{
    public function getMessageClassType(): string
    {
        return RegisterTMRequest::class;
    }


}