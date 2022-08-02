<?php

declare(strict_types=1);
/**
 * Copyright 2019-2022 Seata.io Group.
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

class HeartbeatMessage extends AbstractMessage implements MessageTypeAware
{
    protected const serialVersionUID = -985316399527884899;

    protected bool $ping = true;

    public function __construct(bool $ping = true)
    {
        $this->ping = $ping;
    }

    public function __toString()
    {
        return $this->ping ? 'services ping' : 'services pong';
    }

    public static function ping(): self
    {
        return new self(true);
    }

    public static function pong(): self
    {
        return new self(false);
    }

    public function isPing(): bool
    {
        return $this->ping;
    }

    public function setPing(bool $ping): HeartbeatMessage
    {
        $this->ping = $ping;
        return $this;
    }

    /**
     * Return the message type.
     */
    public function getTypeCode(): int
    {
        return MessageType::TYPE_HEARTBEAT_MSG;
    }
}
