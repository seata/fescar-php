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
