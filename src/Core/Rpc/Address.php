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
namespace Hyperf\Seata\Core\Rpc;

use JetBrains\PhpStorm\Pure;

class Address
{

    protected string $target;

    protected string $host = '';

    protected ?int $port;

    public function __construct(string $host, ?int $port)
    {
        $this->host = $host;
        $this->port = $port;
    }

    #[Pure]
    public function __toString()
    {
        return $this->getHost() . ':' . $this->getPort() . '?target=' . $this->getTarget();
    }

    public function getHost(): string
    {
        return $this->host;
    }

    public function setHost(string $host): static
    {
        $this->host = $host;
        return $this;
    }

    public function getPort(): ?int
    {
        return $this->port;
    }

    public function setPort(?int $port): static
    {
        $this->port = $port;
        return $this;
    }

    public function getTarget(): string
    {
        return $this->target;
    }

    public function setTarget(string $target): static
    {
        $this->target = $target;
        return $this;
    }
}
