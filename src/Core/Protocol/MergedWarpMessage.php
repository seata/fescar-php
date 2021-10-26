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

class MergedWarpMessage extends AbstractMessage implements MergeMessageInterface
{
    public $msgs = [];

    public $msgIds = [];

    public function getTypeCode(): int
    {
        return MessageType::TYPE_SEATA_MERGE;
    }
}
