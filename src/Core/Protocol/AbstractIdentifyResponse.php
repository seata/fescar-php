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

abstract class AbstractIdentifyResponse extends AbstractResultMessage
{
    /**
     * The Version.
     */
    protected $version = Version::CURRENT;

    /**
     * @var string
     */
    protected $extraData;

    /**
     * @var bool
     */
    protected $identified;

    public function getVersion(): string
    {
        return $this->version;
    }

    /**
     * @return $this
     */
    public function setVersion(string $version)
    {
        $this->version = $version;
        return $this;
    }

    public function getExtraData(): string
    {
        return $this->extraData;
    }

    /**
     * @return $this
     */
    public function setExtraData(string $extraData)
    {
        $this->extraData = $extraData;
        return $this;
    }

    public function isIdentified(): bool
    {
        return $this->identified;
    }

    /**
     * @return $this
     */
    public function setIdentified(bool $identified)
    {
        $this->identified = $identified;
        return $this;
    }
}
