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

    public function __construct(string $applicationId, string $transactionServiceGroup, ?string $extraData = null)
    {
        parent::__construct($applicationId, $transactionServiceGroup, $extraData);

        $stringBuilder = '';
        if (! empty($extraData)) {
            $stringBuilder .= $extraData;
            if (substr($extraData, -1) !== PHP_EOL) {
                $stringBuilder .= PHP_EOL;
            }
        }

        if (! empty($transactionServiceGroup)) {
            $stringBuilder .= sprintf('%s=%s', $this->UDATA_VGROUP, $transactionServiceGroup);
            $stringBuilder .= PHP_EOL;
            $clientIp = getHostByName(getHostName());
            if (! empty($clientIp)) {
                $stringBuilder .= sprintf('%s=%s', $this->UDATA_IP, $clientIp);
                $stringBuilder .= PHP_EOL;
            }
        }
        $this->extraData = $stringBuilder;
    }

    public function getTypeCode(): int
    {
        return MessageType::TYPE_REG_CLT;
    }
}
