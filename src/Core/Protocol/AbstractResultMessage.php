<?php

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