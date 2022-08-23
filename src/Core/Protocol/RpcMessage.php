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
     * @param mixed $id
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

    public function getCodec(): int
    {
        return $this->codec;
    }

    /**
     * @param mixed $codec
     * @return $this
     */
    public function setCodec(int $codec)
    {
        $this->codec = $codec;
        return $this;
    }

    public function getCompressor(): int
    {
        return $this->compressor;
    }

    /**
     * @param mixed $compressor
     * @return $this
     */
    public function setCompressor(int $compressor)
    {
        $this->compressor = $compressor;
        return $this;
    }

    public function getHeadMap(): array
    {
        return $this->headMap;
    }

    /**
     * @param mixed $headMap
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
