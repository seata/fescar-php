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
namespace Hyperf\Seata\Core\Codec\Seata;

use Hyperf\Seata\Core\Codec\CodecInterface;
use Hyperf\Seata\Core\Protocol\AbstractMessage;
use Hyperf\Seata\Utils\Buffer\ByteBuffer;

class SeataCodec implements CodecInterface
{
    /**
     * @var MessageCodecFactory
     */
    protected $messageCodecFactory;

    public function __construct(MessageCodecFactory $messageCodecFactory)
    {
        $this->messageCodecFactory = $messageCodecFactory;
    }

    public function encode(AbstractMessage $message, ByteBuffer $buffer): ByteBuffer
    {
        $typeCode = $message->getTypeCode();
        // Message Codec
        $messageCodec = $this->messageCodecFactory->getMessageCodec($typeCode);
        $buffer->putUInt16($typeCode);
        $messageCodec->encode($message, $buffer);
        return $buffer;
    }

    public function decode(string $content)
    {
        $length = strlen($content);
        if (! $length) {
            throw new \InvalidArgumentException('Nothing to decode');
        }
        if ($length < 2) {
            throw new \InvalidArgumentException('The data is not available for decode');
        }
        $buffer = ByteBuffer::wrapString($content);
        $typeCode = $buffer->readUShort();
        // New Message
        $message = $this->messageCodecFactory->getMessage($typeCode);
        // Message Codec
        $messageCodec = $this->messageCodecFactory->getMessageCodec($typeCode);
        $messageCodec->decode($message, $buffer);
        return $message;
    }
}
