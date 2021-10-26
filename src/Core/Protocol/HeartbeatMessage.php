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

class HeartbeatMessage extends AbstractMessage implements MessageTypeAware
{
    protected const serialVersionUID = -985316399527884899;

    protected bool $ping;

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
