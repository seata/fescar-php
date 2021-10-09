<?php

namespace Hyperf\Seata\Core\Protocol;


use Hyperf\Seata\Core\Codec\CodecType;
use Hyperf\Seata\Core\Compressor\CompressorType;

class RpcMessage
{

    /**
     * @var int
     */
    private $id;
    /**
     * @var int
     */
    private $messageType;
    /**
     * @var string
     */
    private $codec = CodecType::SEATA;
    /**
     * @var string
     */
    private $compressor = CompressorType::NONE;
    /**
     * @var array
     */
    private $headMap = [];
    /**
     * @var object
     */
    private $body;

    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function getMessageType(): int
    {
        return $this->messageType;
    }

    /**
     * @return $this
     */
    public function setMessageType(int $messageType)
    {
        $this->messageType = $messageType;
        return $this;
    }

    public function getCodec(): string
    {
        return $this->codec;
    }

    /**
     * @return $this
     */
    public function setCodec($codec)
    {
        $this->codec = $codec;
        return $this;
    }

    public function getCompressor(): string
    {
        return $this->compressor;
    }

    /**
     * @return $this
     */
    public function setCompressor($compressor)
    {
        $this->compressor = $compressor;
        return $this;
    }

    public function getHeadMap(): array
    {
        return $this->headMap;
    }

    /**
     * @return $this
     */
    public function setHeadMap($headMap)
    {
        $this->headMap = $headMap;
        return $this;
    }

    public function getBody(): object
    {
        return $this->body;
    }

    /**
     * @param object $body
     * @return $this
     */
    public function setBody($body)
    {
        $this->body = $body;
        return $this;
    }

}