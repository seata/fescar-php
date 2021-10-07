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

class MergeResultMessage extends AbstractMessage implements MergeMessageInterface
{
    /**
     * @var AbstractResultMessage[]
     */
    public $msgs;

    public function __toString()
    {
        $string = 'MergeResultMessage';
        foreach ($this->msgs as $message) {
            $string .= $message->__toString() . '\n';
        }
        return $string;
    }

    /**
     * @return AbstractResultMessage[]
     */
    public function getMsgs(): array
    {
        return $this->msgs;
    }

    /**
     * @param AbstractResultMessage[] $msgs
     */
    public function setMsgs(array $msgs): void
    {
        $this->msgs = $msgs;
    }

    public function getTypeCode(): int
    {
        return MessageType::TYPE_SEATA_MERGE_RESULT;
    }
}
