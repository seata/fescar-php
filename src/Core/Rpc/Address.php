<?php

namespace Hyperf\Seata\Core\Rpc;


use JetBrains\PhpStorm\Pure;

class Address
{

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
        return $this->getHost() . ':' . $this->getPort();
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


}