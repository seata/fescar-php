<?php

namespace Hyperf\Seata\Core\Protocol;


class HeartbeatMessage extends AbstractMessage implements MessageTypeAware
{

    protected const serialVersionUID = -985316399527884899;

    protected bool $ping;

    public function __construct(bool $ping = true)
    {
        $this->ping = $ping;
    }

    public static function ping(): self
    {
        return new self(true);
    }

    public static function pong(): self
    {
        return new self(false);
    }

    public function __toString()
    {
        return $this->ping ? 'services ping' : 'services pong';
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
     * Return the message type
     */
    public function getTypeCode(): int
    {
        return MessageType::TYPE_HEARTBEAT_MSG;
    }

}