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

class Address
{
    /**
     * @var string
     */
    protected $host = '';

    /**
     * @var null|int
     */
    protected $port;

    public function __construct(string $host, ?int $port)
    {
        $this->host = $host;
        $this->port = $port;
    }

    public function __toString()
    {
        return $this->getHost() . ':' . $this->getPort();
    }

    public function getHost(): string
    {
        return $this->host;
    }

    /**
     * @return $this
     */
    public function setHost(string $host)
    {
        $this->host = $host;
        return $this;
    }

    public function getPort(): ?int
    {
        return $this->port;
    }

    /**
     * @return $this
     */
    public function setPort(?int $port)
    {
        $this->port = $port;
        return $this;
    }
}
