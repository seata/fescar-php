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

abstract class AbstractResultMessage extends AbstractMessage
{
    /**
     * @var int
     */
    private $resultCode = 0;

    /**
     * @var string
     */
    private $message = '';

    public function getResultCode(): int
    {
        return $this->resultCode;
    }

    /**
     * @return $this
     */
    public function setResultCode(int $resultCode)
    {
        $this->resultCode = $resultCode;
        return $this;
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @return $this
     */
    public function setMessage(string $message)
    {
        $this->message = $message;
        return $this;
    }
}
