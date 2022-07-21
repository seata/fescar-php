<?php

declare(strict_types=1);
/**
 * Copyright 1999-2022 Seata.io Group.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 */
namespace Hyperf\Seata\Core\Protocol;

class RegisterTMRequest extends AbstractIdentifyRequest
{
    protected const serialVersionUID = -5929081344190543690;

    public string $UDATA_VGROUP = 'vgroup';

    public string $UDATA_AK = 'ak';

    public string $UDATA_DIGEST = 'digest';

    public string $UDATA_IP = 'ip';

    public string $UDATA_TIMESTAMP = 'timestamp';

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
            $clientIp = gethostbyname(gethostname());
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
