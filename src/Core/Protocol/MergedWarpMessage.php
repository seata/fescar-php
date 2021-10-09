<?php


namespace Hyperf\Seata\Core\Protocol;


class MergedWarpMessage extends AbstractMessage implements MergeMessageInterface
{
    public $msgs = [];

    public $msgIds = [];

    public function getTypeCode(): int
    {
        return MessageType::TYPE_SEATA_MERGE;
    }
}