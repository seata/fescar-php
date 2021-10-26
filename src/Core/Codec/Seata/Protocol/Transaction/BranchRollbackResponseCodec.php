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
namespace Hyperf\Seata\Core\Codec\Seata\Protocol\Transaction;

use Hyperf\Seata\Core\Protocol\Transaction\BranchRollbackResponse;

class BranchRollbackResponseCodec extends AbstractBranchEndResponseCodec
{
    public function getMessageClassType(): string
    {
        return BranchRollbackResponse::class;
    }
}
