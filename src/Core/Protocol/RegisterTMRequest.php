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
namespace Hyperf\Seata\Core\Protocol;

class RegisterTMRequest extends AbstractIdentifyRequest
{

    protected const serialVersionUID = -5929081344190543690;

    public string $UDATA_VGROUP = 'vgroup';
    public string $UDATA_AK = "ak";
    public string $UDATA_DIGEST = "digest";
    public string $UDATA_IP = "ip";
    public string $UDATA_TIMESTAMP = "timestamp";

    public function getTypeCode(): int
    {
        return MessageType::TYPE_REG_CLT;
    }
}
