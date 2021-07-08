<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
namespace Hyperf\Seata\Core\Codec\Seata\Protocol;

use Hyperf\Seata\Core\Protocol\RegisterTMResponse;

class RegisterTMResponseCodec extends AbstractIdentifyResponseCodec
{
    public function getMessageClassType(): string
    {
        return RegisterTMResponse::class;
    }
}
